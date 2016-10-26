<?php

namespace CodeDelivery\Http\Controllers;

use CodeDelivery\Http\Requests;
use CodeDelivery\Http\Requests\AdminCategoryRequest;
use CodeDelivery\Repositories\CategoryRepository;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;

class CategoriesController extends Controller
{
    private $repository;

    public function __construct(CategoryRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        $categories = $this->repository->paginate(10);

        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(AdminCategoryRequest $requests)
    {
        $data = $requests->all();
        if (Input::hasFile('image')) {
            $image = Input::file('image');
            $extension = $image->getClientOriginalExtension();
            if ($extension != 'jpg' && $extension != 'jpeg' && $extension != 'png') {
                return back()->with('erro', 'Erro: O formato da imagem deve ser JPG, JPEG ou PNG!');
            } else {

                $image->move(public_path() . '/img/categories/', 'img_' . $data['name'] . '.' . $extension);
                $data['image'] = 'img_' . $data['name'] . '.' . $extension;
                $this->repository->create($data);
                return redirect()->route('admin.categories.index');
            }
        } else {
            $this->repository->create($data);
            return redirect()->route('admin.categories.index');
        }


    }

    public function edit($id)
    {

        $category = $this->repository->find($id);

        return view('admin.categories.edit', compact('category'));
    }

    public function update(AdminCategoryRequest $requests, $id)
    {
        $data = $requests->all();

        if (Input::hasFile('image')) {
            $image = Input::file('image');
            $extension = $image->getClientOriginalExtension();
            if ($extension != 'jpg' && $extension != 'jpeg' && $extension != 'png') {
                return back()->with('erro', 'Erro: O formato da imagem deve ser JPG, JPEG ou PNG!');
            } else {
                $delImage = $this->repository->find($id);
                File::delete(public_path() . '/img/categories/' . $delImage['image']);
                $image->move(public_path() . '/img/categories/', 'img_' . $data['name'] . '.' . $extension);
                $data['image'] = 'img_' . $data['name'] . '.' . $extension;
                $this->repository->update($data, $id);
                return redirect()->route('admin.categories.index');
            }
        } else {

            $this->repository->update($data, $id);

            return redirect()->route('admin.categories.index');
        }

    }

    public function destroy($id)
    {
        try {
            $data = $this->repository->find($id);
            File::delete(public_path() . '/img/categories/' . $data['image']);
            $this->repository->delete($id);

            return redirect()->route('admin.categories.index');
        } catch (Exception $e) {
            return back()->with('erro', 'Erro: Impossível excluir categorias com produtos vinculados!');
        }
    }

    public function reportCategory()
    {
        $categories = $this->repository->paginate();

        $pdf = app('dompdf.wrapper');
        $pdf->loadView('admin.categories.reports.categories', compact('categories'));
        return $pdf->stream();

    }
}
