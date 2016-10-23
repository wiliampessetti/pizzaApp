<!--Name Form Imput-->


<div class="form-group">
    {!! Form::label('Name', 'Nome:') !!}
    {!! Form::text('name', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('Image', 'Imagem:') !!}
    {!! Form::file('image', null, ['class'=>'form-control']) !!}
</div>