@extends('layouts.app')

@section('content')
<div class="container">
	<h3>Categorias</h3>
	<br>
	<a href="{{route('admin.categories.create')}}" class="btn btn-primary">Nova Categoria</a>
	<br><br>

	<table class="table table-bordered">
		<thead>
			<tr>
				<th class="col-md-2">ID</th>
				<th class="col-md-8">Nome</th>
				<th class="col-md-2">Ação</th>
			</tr>
		</thead>
		<tbody>
		@foreach($categories as $category)
			<tr>
				<td>{{$category->id}}</td>
				<td>{{$category->name}}</td>
				<td align="center">
					<a href="{{route('admin.categories.edit', ['id'=>$category->id])}}" class="btn btn-warning btn-sm">
						Editar
					</a>
					<a href="{{route('admin.categories.destroy', ['id'=>$category->id])}}" class="btn btn-danger btn-sm" onclick="return confirm('Deseja excluir a categoria selecionada?')">
						Excluir
					</a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

	{!!$categories->render()!!}

</div>



@endsection