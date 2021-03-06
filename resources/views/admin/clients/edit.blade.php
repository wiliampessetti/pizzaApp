@extends('layouts.app')

@section('content')
<div class="container">
	<h3>Editando Cliente: {{$client->user->name}}</h3>

	{!! Form::model($client, ['route'=>['admin.clients.update', $client->id]]) !!}

	@include('admin.clients._form')

	<div class="form-group">
	{!! Form::submit('Salvar', ['class'=>'btn btn-success']) !!}
	</div>

	{!! Form::close() !!}
</div>



@endsection
