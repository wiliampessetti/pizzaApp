@extends('layouts.app')

@section('content')
<div class="container">
	<h3>Nova Categoria</h3>

	@include('errors._check')

	{!! Form::open(['route'=>'admin.categories.store']) !!}

	@include('admin.categories._form')

	<div class="form-group">
	{!! Form::submit('Salvar', ['class'=>'btn btn-success']) !!}
	</div>

	{!! Form::close() !!}
</div>



@endsection
