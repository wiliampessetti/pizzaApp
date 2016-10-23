<?php

namespace CodeDelivery\Http\Controllers;

use CodeDelivery\Http\Requests;
use CodeDelivery\Http\Requests\AdminCategoryRequest;
use CodeDelivery\Http\Requests\AdminProductRequest;
use CodeDelivery\Repositories\CategoryRepository;
use CodeDelivery\Repositories\ProductRepository;
use Exception;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    private $repository;

    public function __construct(ProductRepository $repository, CategoryRepository $categoryRepository)
    {
        $this->repository = $repository;
        $this->categoryRepository = $categoryRepository;
    }

    public function index()
    {
        $products = $this->repository->paginate(10);

        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        $categories = $this->categoryRepository->pluck();
        return view('admin.products.create', compact('categories'));
    }

    public function store(AdminProductRequest $requests)
    {
        $data = $requests->all();
        $this->repository->create($data);

        return redirect()->route('admin.products.index');
    }

    public function edit($id)
    {

        $product = $this->repository->find($id);
        $categories = $this->categoryRepository->pluck();

        return view('admin.products.edit', compact('product', 'categories'));
    }

    public function update(AdminProductRequest $requests, $id)
    {
        $data = $requests->all();
        $this->repository->update($data, $id);

        return redirect()->route('admin.products.index');
    }

    public function destroy($id)
    {
        try {
            $this->repository->delete($id);

            return redirect()->route('admin.products.index');

        } catch (Exception $e) {
            return back()->with('erro', 'Erro: Existem lançamentos vinculados a esse produto!');
        }
    }
}
