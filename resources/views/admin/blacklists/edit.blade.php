@extends('layouts.app')

@section('content')
<div class="container">
	<h3>Editando Pendência do Cliente: {{$clients['data'][0]['name']}}</h3>

	@include('errors._check')

	{!! Form::model($blackList, ['route'=>['admin.blacklists.update', $blackList->id]]) !!}

	@include('admin.blacklists._form')

	<div class="form-group">
	{!! Form::submit('Salvar', ['class'=>'btn btn-success']) !!}
	</div>

	{!! Form::close() !!}
</div>



@endsection
