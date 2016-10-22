@extends('layouts.app')

@section('content')
<div class="container">
	<h3>Novo Cliente</h3>

	{!! Form::open(['route'=>'admin.clients.store']) !!}

	@include('admin.clients._form')

	<div class="form-group">
	{!! Form::submit('Salvar', ['class'=>'btn btn-success']) !!}
	</div>

	{!! Form::close() !!}
</div>



@endsection
