@extends('layouts.app')

@section('content')
<div class="container">
	<h3>Novo Produto</h3>

	@include('errors._check')

	{!! Form::open(['route'=>'admin.products.store']) !!}

	@include('admin.products._form')

	<div class="form-group">
	{!! Form::submit('Salvar', ['class'=>'btn btn-success']) !!}
	</div>

	{!! Form::close() !!}
</div>



@endsection
