@extends('layouts.report')
@section('content')

<h1>Relatório de Categorias</h1>


<table class="table table-bordered">
    <thead>
    <tr>
        <th class="col-md-2">ID</th>
        <th class="col-md-8">Nome</th>
    </tr>
    </thead>
    <tbody>
    @foreach($categories as $category)
        <tr>
            <td>{{$category->id}}</td>
            <td>{{$category->name}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection()