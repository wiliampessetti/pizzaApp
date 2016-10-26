@extends('layouts.app')

@section('content')

    <div class="container">

        @if(session('erro'))
            <div class="alert alert-danger">
                {{session('erro')}}
            </div>
        @endif

        <h3>Novo Produto</h3>

        @include('errors._check')

        {!! Form::open(['route'=>'admin.products.store', 'files'=>true]) !!}

        @include('admin.products._form')

        <div class="form-group">
            {!! Form::submit('Salvar', ['class'=>'btn btn-success']) !!}
        </div>

        {!! Form::close() !!}
    </div>



@endsection
