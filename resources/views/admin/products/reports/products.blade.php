@extends('layouts.report')
@section('content')

    <h3>Relatório de Produtos</h3>


    <table>
        <thead>
        <tr class="odd">
            <th>ID</th>
            <th>Produto</th>
            <th>Categoria</th>
            <th>Preço</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->category->name}}</td>
                <td>{{$product->price}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection()