@extends('layouts.app')

@section('content')

    <div class="container">

        @if(session('erro'))
            <div class="alert alert-danger">
                {{session('erro')}}
            </div>
        @endif

        <h3>Lista Negra</h3>
        <br>
        <a href="{{route('admin.clients.index')}}" class="btn btn-primary">Adicionar a Lista Negra</a>
        <br><br>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th class="col-md-1">ID</th>
                <th class="col-md-3">Cliente</th>
                <th class="col-md-6">Motivo</th>
                <th class="col-md-2">Ação</th>
            </tr>
            </thead>
            <tbody>
            @foreach($blackLists as $blackList)
                <tr>
                    <td>{{$blackList->id}}</td>
                    <td>{{$blackList->client->user->name}}</td>
                    <td>{{$blackList->reason}}</td>
                    <td align="center">
                        <a href="{{route('admin.blacklists.edit', ['id'=>$blackList->id])}}"
                           class="btn btn-warning btn-sm">
                            Editar
                        </a>
                        <a href="{{route('admin.blacklists.destroy', ['id'=>$blackList->id])}}"
                           class="btn btn-danger btn-sm"
                           onclick="return confirm('Deseja excluir este cliente da lista negra?')">
                            Excluir
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        {!!$blackLists->render()!!}

    </div>



@endsection