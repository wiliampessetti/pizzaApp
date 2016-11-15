<!--Name Form Imput-->


<div class="form-group">
    {!! Form::label('Client_id', 'ID do Cliente:') !!}
    {!! Form::text('client_id', $clients['data'][0]['id'], ['class'=>'form-control', 'readonly']) !!}
</div>

<div class="form-group">
    {!! Form::label('Name', 'Nome do Cliente:') !!}
    {!! Form::text('name', $clients['data'][0]['name'], ['class'=>'form-control', 'readonly']) !!}
</div>

<div class="form-group">
    {!! Form::label('Reason', 'Motivo:') !!}
    {!! Form::textarea('reason', null, ['class'=>'form-control']) !!}
</div>