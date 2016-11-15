@extends('layouts.report')
@section('content')

<h1>Relatório de Lista Negra</h1>


<table class="table table-bordered">
    <thead>
    <tr>
        <th class="col-md-2">ID</th>
        <th class="col-md-8">Cliente</th>
        <th class="col-md-8">Motivo</th>
    </tr>
    </thead>
    <tbody>
    @foreach($blackLists as $blackList)
        <tr>
            <td>{{$blackList->id}}</td>
            <td>{{$blackList->client}}</td>
            <td>{{$blackList->reason}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection()