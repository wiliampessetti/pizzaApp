@extends('layouts.app')

@section('content')
<div class="container">
	<h3>Novo Cupom</h3>

	@include('errors._check')

	{!! Form::open(['route'=>'admin.cupoms.store']) !!}

	@include('admin.cupoms._form')

	<div class="form-group">
	{!! Form::submit('Salvar', ['class'=>'btn btn-success']) !!}
	</div>

	{!! Form::close() !!}
</div>



@endsection
