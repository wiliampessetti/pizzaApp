<?php

namespace CodeDelivery\Http\Controllers;

use CodeDelivery\Http\Requests;
use CodeDelivery\Repositories\CategoryRepository;
use CodeDelivery\Repositories\OrderRepository;
use CodeDelivery\Repositories\ProductRepository;
use CodeDelivery\Repositories\UserRepository;
use CodeDelivery\Services\OrderService;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    private $repository;
    /**
     * @var UserRepository
     */
    private $userRepository;
    /**
     * @var ProductRepository
     */
    private $productRepository;
    /**
     * @var OrderService
     */
    private $service;
    /**
     * @var CategoryRepository
     */
    private $categoryRepository;

    public function __construct(
        OrderRepository $repository,
        UserRepository $userRepository,
        ProductRepository $productRepository,
        CategoryRepository $categoryRepository,
    OrderService $service
    )
    {
        $this->repository = $repository;
        $this->userRepository = $userRepository;
        $this->productRepository = $productRepository;
        $this->service = $service;
        $this->categoryRepository = $categoryRepository;
    }

    public function index()
    {

        $clientId = $this->userRepository->find(Auth::user()->id)->client->id;
        $orders = $this->repository->scopeQuery(function ($query) use($clientId){
            return $query->where('client_id', '=', $clientId);
        })->paginate();
        return view('customer.order.index', compact('orders'));
    }

    public function createIndex()
    {
        return view('customer.order.create');
    }

    public function create($id)
    {
            $product = $this->productRepository->scopeQuery(function ($query) use ($id) {
                return $query->where('id', '=', $id);
            })->paginate()->toArray();
            Cart::add($product['data'][0]['id'], $product['data'][0]['name'], 1, $product['data'][0]['price']);
            return view('customer.order.create');
    }

    public function selectProduct($id)
    {
        $products = $this->productRepository->scopeQuery(function ($query) use($id){
            return $query->where('category_id', '=', $id);
        })->paginate();
        return view('customer.order.selectProducts', compact('products'));
    }

    public function selectCategory(){
        $categories = $this->categoryRepository->pluckCheckout();
        return view('customer.order.selectCategory', compact('categories'));
    }

    public function removeFromCart($rowId)
    {
        Cart::remove($rowId);
        return view('customer.order.create');
    }

    public function downFromCart($rowId)
    {
        $product = Cart::get($rowId);
        Cart::update($rowId, ['qty' => $product->qty-1]);
        return view('customer.order.create');
    }

    public function upFromCart($rowId)
    {
        $product = Cart::get($rowId);
        Cart::update($rowId, ['qty' => $product->qty+1]);
        return view('customer.order.create');
    }

    public function store()
    {
        $i = 0;
        foreach (Cart::content() as $row){

            $data['items'][$i]['product_id'] = $row->id;
            $data['items'][$i]['qtd'] = $row->qty;
            $data['items'][$i]['price'] = $row->price;
            $i++;
        }
        $clientId = $this->userRepository->find(Auth::user()->id)->client->id;
        $data['client_id'] = $clientId;
        $this->service->create($data);
        Cart::destroy();
        return redirect()->route('customer.order.index');
    }

    public function erro()
    {
        return view('errors.blackListError');
    }

}
