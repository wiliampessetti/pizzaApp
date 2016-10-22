<!--Name Form Imput-->


<div class="form-group">
    {!! Form::label('Name', 'Nome:') !!}
    {!! Form::text('user[name]', null, ['class'=>'form-control']) !!}
    @if ($errors->has('user.name'))
        <span class="alert-danger">
            <strong>{{ $errors->first('user.name') }}</strong>
        </span>
    @endif
</div>

<div class="form-group">
    {!! Form::label('Email', 'Email:') !!}
    {!! Form::text('user[email]', null, ['class'=>'form-control']) !!}
    @if ($errors->has('user.email'))
        <span class="alert-danger">
            <strong>{{ $errors->first('user.email') }}</strong>
        </span>
    @endif
</div>

<div class="form-group">
    {!! Form::label('Telefone', 'Telefone:') !!}
    {!! Form::text('phone', null, ['class'=>'form-control']) !!}
    @if ($errors->has('phone'))
        <span class="alert-danger">
            <strong>{{ $errors->first('phone') }}</strong>
        </span>
    @endif
</div>

<div class="form-group">
    {!! Form::label('Neighborhood', 'Bairro:') !!}
    @if(!$errors->has('neighborhood'))
        {!! Form::text('neighborhood', null, ['class'=>'form-control']) !!}
    @elseif ($errors->has('neighborhood'))
        {!! Form::text('neighborhood', null, ['class'=>'form-control alert-danger']) !!}
        <span class="alert-danger">
            <strong>{{ $errors->first('neighborhood') }}</strong>
        </span>
    @endif
</div>

<div class="form-group">
    {!! Form::label('Street', 'Rua:') !!}
    @if(!$errors->has('street'))
        {!! Form::text('street', null, ['class'=>'form-control']) !!}
    @elseif ($errors->has('street'))
        {!! Form::text('street', null, ['class'=>'form-control alert-danger']) !!}
        <span class="alert-danger">
            <strong>{{ $errors->first('street') }}</strong>
        </span>
    @endif
</div>

<div class="form-group">
    {!! Form::label('Number', 'Número:') !!}
    @if(!$errors->has('number'))
        {!! Form::text('number', null, ['class'=>'form-control']) !!}
    @elseif ($errors->has('number'))
        {!! Form::text('number', null, ['class'=>'form-control alert-danger']) !!}
        <span class="alert-danger">
            <strong>{{ $errors->first('number') }}</strong>
        </span>
    @endif
</div>

<div class="form-group">
    {!! Form::label('Complement', 'Complemento:') !!}
    @if(!$errors->has('complement'))
        {!! Form::text('complement', null, ['class'=>'form-control']) !!}
    @elseif ($errors->has('complement'))
        {!! Form::text('complement', null, ['class'=>'form-control alert-danger']) !!}
        <span class="alert-danger">
            <strong>{{ $errors->first('complement') }}</strong>
        </span>
    @endif
</div>

<div class="form-group">
    {!! Form::label('Cidade', 'Cidade:') !!}
    {!! Form::text('city', null, ['class'=>'form-control']) !!}
    @if ($errors->has('city'))
        <span class="alert-danger">
            <strong>{{ $errors->first('city') }}</strong>
        </span>
    @endif
</div>

<div class="form-group">
    {!! Form::label('Estado', 'Estado:') !!}
    {!! Form::select('state', ['AC'=>'Acre',
                                'AL'=>'Alagoas',
                                'AP'=>'Amapá',
                                'AM'=>'Amazonas',
                                'BA'=>'Bahia',
                                'CE'=>'Ceará',
                                'DF'=>'Distrito Federal',
                                'ES'=>'Espírito Santo',
                                'GO'=>'Goiás',
                                'MA'=>'Maranhão',
                                'MT'=>'Mato Grosso',
                                'MS'=>'Mato Grosso do Sul',
                                'MG'=>'Minas Gerais',
                                'PA'=>'Pará',
                                'PB'=>'Paraíba',
                                'PR'=>'Paraná',
                                'PE'=>'Pernambuco',
                                'PI'=>'Piauí',
                                'RJ'=>'Rio de Janeiro',
                                'RN'=>'Rio Grande do Norte',
                                'RS'=>'Rio Grande do Sul',
                                'RO'=>'Rondônia',
                                'RR'=>'Roraima',
                                'SC'=>'Santa Catarina',
                                'SP'=>'São Paulo',
                                'SE'=>'Sergipe',
                                'TO'=>'Tocantins']) !!}
    @if ($errors->has('state'))
        <span class="alert-danger">
            <strong>{{ $errors->first('state') }}</strong>
        </span>
    @endif
</div>

<div class="form-group">
    {!! Form::label('CEP', 'CEP:') !!}
    {!! Form::text('zipcode', null, ['class'=>'form-control']) !!}
    @if ($errors->has('zipcode'))
        <span class="alert-danger">
            <strong>{{ $errors->first('zipcode') }}</strong>
        </span>
    @endif
</div>

@if(Auth::user())
    @if(Auth::user()->role == "admin")
        <div class="form-group">
            {!! Form::label('Role', 'Papel:') !!}
            {!! Form::select('user[role]', ['client'=>'Cliente',
                                        'admin'=>'Administrador',
                                        'deliveryman'=>'Entregador']) !!}
        </div>
    @endif
@endif

    <div class="form-group col-md-6">
        {!! Form::label('Password', 'Senha:') !!}
        {!! Form::password('user[password]', null, ['class'=>'form-control']) !!}
        @if ($errors->has('user.password'))
            <span class="alert-danger">
                <strong>{{ $errors->first('user.password') }}</strong>
            </span>
        @endif
    </div>

    <div class="form-group col-md-6">
        {!! Form::label('Password_confirm', 'Confirme sua senha:') !!}
        {!! Form::password('user[password_confirmation]', null, ['class'=>'form-control']) !!}
        @if ($errors->has('user.password_confirmation'))
            <span class="alert-danger">
                <strong>{{ $errors->first('user.password_confirmation') }}</strong>
            </span>
        @endif
    </div>



