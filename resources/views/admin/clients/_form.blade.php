        <!--Name Form Imput-->

        @extends('layouts.app')

        @section('content')

        <style type="text/css">
          /*Fonts*/
          @import 'https://fonts.googleapis.com/css?family=Open+Sans';
          @import 'https://fonts.googleapis.com/css?family=Galada';

          ::selection {
            background: #ffb7b7; /* WebKit/Blink Browsers */
        }
        ::-moz-selection {
            background: #ffb7b7; /* Gecko Browsers */
        }
        * { 
            -moz-box-sizing: border-box; 
            -webkit-box-sizing: border-box; 
            box-sizing: border-box; 
        }
        :focus {outline:none}
        /*Reset*/
        body, div, dl, dt, dd, ul, ol, li, h1, h2, h3, h4, h5, h6, 
        pre, form, fieldset, input, textarea, p, blockquote, th, td { 
            padding:0;
            margin:0;}
            body,input{
              font-family:'Open sans',sans-serif;
              font-size:18px;
              color:#4c4c4c;
          }
          body{
              background-color:#292931;
              background:url(https://i.ytimg.com/vi/9olaKOI_1gI/maxresdefault.jpg)  no-repeat center center fixed; 
              -webkit-background-size: cover;
              -moz-background-size: cover;
              -o-background-size: cover;
              background-size: cover;
          }
          .navbar-default {
              background-color: none !important;
              border-color: none !important;
          }
          form{
              margin: 10px 35px;
          }
          input{
              border:none;
          }
          a{
              text-decoration: none;
              color: rgb(255, 255, 255);

          }
          a:hover{
              color: rgba(255, 152, 0, 0.79);
              text-decoration: underline;

          }
          input[type=email],input[type=text],input[type=select] ,input[type=password] {
              width: 200px;
              height: 39px;
              border:1px solid #cbc9c9;
              padding-left:5px;
              margin-left:-5px;
              margin-top:1px;
              border-radius:0px 3px 3px 0px;
              -webkit-border-radius:0px 3px 3px 0px;
              -moz-border-radius:0px 3px 3px 0px;
          }
          input[type=submit]{
              width: 237px;
              height: 40px;
              margin-left:17px;
              border-radius:3px;
              background-color:#ae6a6a;
              color:#f8f8f8;
              border-radius:2px 2px 12px 12px;
              -webkit-border-radius:2px 2px 12px 12px;
              -moz-border-radius:2px 2px 12px 12px;

          }
          input[type=submit]:hover{
              background-color:#607d8b;
              color:#f8f8f8; 
              cursor:pointer;

          }
          #icon{
              background-color:#F4F4F4;
              color:#625864;
              display:inline-block;
              font-size:14px;
              padding-top:10px;
              padding-bottom:7px;
              width:40px;
              margin-left: 15px;
              margin-bottom:20px;
              text-align:center;
              border-top:solid 1px #cbc9c9;
              border-bottom:solid 1px #cbc9c9;
              border-left:solid 1px #cbc9c9;
              border-radius:3px 0 0 3px;
              -webkit-border-radius:3px 0 0 3px;
              -moz-border-radius:3px 0 0 3px; 
          }
          .wrapper{
              margin:50px auto;
              width: 343px; 
              height: 280px; 
              border-radius:5px;
              -moz-border-radius:5px;
              -webkit-border-radius:5px;
          }
          .wrapper h1{
              font-family: 'Galada', cursive;
              color:#f4f4f4;
              letter-spacing:8px;
              text-align:center;
              padding-top:5px;
              padding-bottom:5px;
          }
          .wrapper hr{
              opacity:0.2;

          }
          .crtacc{
              margin-left:75px;
          }
        </style>


        <div class="wrapper animated bounce">
            <h1>PizzApp</h1>
            <hr>
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
              {{ csrf_field() }}
              <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <label id="icon" for="name"><i class="fa fa-envelope"></i></label>

                <input id="name" type="text" name="name" placeholder="Nome" value="{{ old('name') }}">
                @if ($errors->has('name'))
                <span class="help-block">
                  <strong>{{ $errors->first('name') }}</strong>
              </span>
              @endif
          </div>
          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label id="icon" for="email"><i class="fa fa-envelope"></i></label>

            <input id="email" type="email" name="email" placeholder="E-mail" value="{{ old('email') }}">
            @if ($errors->has('email'))
            <span class="help-block">
              <strong>{{ $errors->first('email') }}</strong>
          </span>
          @endif
        </div>
        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
            <label id="icon" for="phone"><i class="fa fa-envelope"></i></label>

            <input id="phone" type="text" name="phone" placeholder="Telefone" value="{{ old('phone') }}">
            @if ($errors->has('phone'))
            <span class="help-block">
              <strong>{{ $errors->first('phone') }}</strong>
          </span>
          @endif
        </div>
        <div class="form-group{{ $errors->has('neighborhood') ? ' has-error' : '' }}">
            <label id="icon" for="neighborhood"><i class="fa fa-envelope"></i></label>

            <input id="neighborhood" type="text" name="neighborhood" placeholder="Bairro" value="{{ old('neighborhood') }}">
            @if ($errors->has('neighborhood'))
            <span class="help-block">
              <strong>{{ $errors->first('neighborhood') }}</strong>
          </span>
          @endif
        </div>
        <div class="form-group{{ $errors->has('street') ? ' has-error' : '' }}">
            <label id="icon" for="street"><i class="fa fa-envelope"></i></label>

            <input id="street" type="text" name="street" placeholder="Rua" value="{{ old('street') }}">
            @if ($errors->has('street'))
            <span class="help-block">
              <strong>{{ $errors->first('street') }}</strong>
          </span>
          @endif
        </div>
        <div class="form-group{{ $errors->has('number') ? ' has-error' : '' }}">
            <label id="icon" for="number"><i class="fa fa-envelope"></i></label>

            <input id="number" type="text" name="number" placeholder="Número" value="{{ old('number') }}">
            @if ($errors->has('number'))
            <span class="help-block">
              <strong>{{ $errors->first('number') }}</strong>
          </span>
          @endif
        </div>
        <div class="form-group{{ $errors->has('complement') ? ' has-error' : '' }}">
            <label id="icon" for="complement"><i class="fa fa-envelope"></i></label>

            <input id="complement" type="text" name="complement" placeholder="Complemento" value="{{ old('complement') }}">
            @if ($errors->has('complement'))
            <span class="help-block">
              <strong>{{ $errors->first('complement') }}</strong>
          </span>
          @endif
        </div>
        <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
            <label id="icon" for="city"><i class="fa fa-envelope"></i></label>

            <input id="city" type="text" name="city" placeholder="Cidade" value="{{ old('city') }}">
            @if ($errors->has('city'))
            <span class="help-block">
              <strong>{{ $errors->first('city') }}</strong>
          </span>
          @endif
        </div>
        <div class="form-group">
            {!! Form::select('state', [''=>'Estado',
            'AC'=>'Acre',
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
        <div class="form-group{{ $errors->has('cep') ? ' has-error' : '' }}">
            <label id="icon" for="cep"><i class="fa fa-envelope"></i></label>

            <input id="cep" type="text" name="cep" placeholder="CEP" value="{{ old('cep') }}">
            @if ($errors->has('cep'))
            <span class="help-block">
              <strong>{{ $errors->first('cep') }}</strong>
          </span>
          @endif
        </div>
        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
            <label id="icon" for="password_confirmation"><i class="fa fa-envelope"></i></label>

            <input id="password_confirmation" type="text" name="password_confirmation" placeholder="Senha" value="{{ old('cep') }}">
            @if ($errors->has('password_confirmation'))
            <span class="help-block">
              <strong>{{ $errors->first('password_confirmation') }}</strong>
          </span>
          @endif
        </div>


        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <label id="icon" for="password"><i class="fa fa-key"></i></label>

            <input id="password" type="password" placeholder="Senha" name="password">

            @if ($errors->has('password'))
            <span class="help-block">
              <strong>{{ $errors->first('password') }}</strong>
          </span>
          @endif
          <input type="submit" value="Registrar">
          <hr>
          <div class="crtacc"><a href="/login">Login</a></div>
        </form>
        </div>
        @endsection



