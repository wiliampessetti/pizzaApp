@extends('layouts.app')

@section('content')
    <div class="container">

        @if(session('erro'))
            <div class="alert alert-danger">
                {{session('erro')}}
            </div>
        @endif

        <h3>Produtos</h3>
        <br>
        <a href="{{route('admin.products.create')}}" class="btn btn-primary">Novo Produto</a>
        <br><br>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Produto</th>
                <th>Categoria</th>
                <th>Preço</th>
                <th>Ação</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->category->name}}</td>
                    <td>{{$product->price}}</td>
                    <td>
                        <a href="{{route('admin.products.edit', ['id'=>$product->id])}}" class="btn btn-warning btn-sm">
                            Editar
                        </a>
                        <a href="{{route('admin.products.destroy', ['id'=>$product->id])}}"
                           class="btn btn-danger btn-sm"
                           onclick="return confirm('Deseja excluir o produto selecionado?')">
                            Excluir
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        {!!$products->render()!!}

    </div>



@endsection