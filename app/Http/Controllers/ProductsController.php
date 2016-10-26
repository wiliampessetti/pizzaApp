<?php

namespace CodeDelivery\Http\Controllers;

use CodeDelivery\Http\Requests;
use CodeDelivery\Http\Requests\AdminCategoryRequest;
use CodeDelivery\Http\Requests\AdminProductRequest;
use CodeDelivery\Repositories\CategoryRepository;
use CodeDelivery\Repositories\ProductRepository;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;

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

        if (Input::hasFile('image')) {
            $image = Input::file('image');
            $extension = $image->getClientOriginalExtension();
            if ($extension != 'jpg' && $extension != 'jpeg' && $extension != 'png') {
                return back()->with('erro', 'Erro: O formato da imagem deve ser JPG, JPEG ou PNG!');
            } else {
                $image->move(public_path() . '/img/products/', 'img_' . $data['name'] . '.' . $extension);
                $data['image'] = 'img_' . $data['name'] . '.' . $extension;
                $this->repository->create($data);
                return redirect()->route('admin.products.index');
            }
        } else {
            $this->repository->create($data);
            return redirect()->route('admin.products.index');
        }

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
            $data = $this->repository->find($id);
            File::delete(public_path().'/img/products/'.$data['image']);
            $this->repository->delete($id);

            return redirect()->route('admin.products.index');

        } catch (Exception $e) {
            return back()->with('erro', 'Erro: Existem lançamentos vinculados a esse produto!');
        }
    }

    public function reportProduct()
    {
        $products = $this->repository->paginate();

        $pdf = app('dompdf.wrapper');
        $pdf->loadView('admin.products.reports.products', compact('products'));
        return $pdf->stream();

    }
}
