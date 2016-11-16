@extends('layouts.app')

@section('content')
<style type="text/css">
	* {
		margin: 0;
		padding: 0;
	}

	body {
		background: #FFF;
		color: #FFF;
		font-family: "Open Sans", sans-serif;
	}

	h2 {
		color: #2E3740;
		font-family: "Sofia", cursive;
		font-size: 15px;
		font-weight: bold;
		font-size: 3.6em;
		text-align: center;
		margin-bottom: 20px;
	}

	a {
		color: #2E3740;
		text-decoration: none;
	}

	.login {
		width: 500px;
		position: absolute;
		top: 10%;
		left: 45%;
		margin-left: -175px;
	}

	input[type="text"], input[type="password"], select {
		width: 500px;
		padding: 20px 0px;
		background: transparent;
		border: 0;
		border-bottom: 1px solid #2E3740;
		outline: none;
		color: #2E3740;
		font-size: 16px;
	}
	input[type=checkbox] {
		display: none;
	}

	label {
		display: block;
		position: absolute;
		margin-right: 10px;
		width: 8px;
		height: 8px;
		border-radius: 50%;
		background: transparent;
		content: "";
		transition: all 0.3s ease-in-out;
		cursor: pointer;
		border: 3px solid #435160;
	}

	#agree:checked ~ label[for=agree] {
		background: #435160;
	}

	input[type="submit"] {
		background: #1FCE6D;
		border: 0;
		width: 500px;
		height: 40px;
		border-radius: 3px;
		color: #fff;
		font-size: 12px;
		cursor: pointer;
		transition: background 0.3s ease-in-out;
	}
	input[type="submit"]:hover {
		background: #16aa56;
		animation-name: shake;
	}

	.forgot {
		margin-top: 30px;
		display: block;
		font-size: 11px;
		text-align: center;
		font-weight: bold;
	}
	.forgot:hover {
		margin-top: 30px;
		display: block;
		font-size: 11px;
		text-align: center;
		font-weight: bold;
		color: #6D7781;
	}

	.agree {
		padding: 30px 0px;
		font-size: 12px;
		text-indent: 25px;
		line-height: 15px;
	}

	::-webkit-input-placeholder {
		color: #435160;
		font-size: 12px;
	}

	.animated {
		animation-fill-mode: both;
		animation-duration: 1s;
	}

	@keyframes shake {
		0%, 100% {
			transform: translateX(0);
		}
		10%, 30%, 50%, 70%, 90% {
			transform: translateX(-10px);
		}
		20%, 40%, 60%, 80% {
			transform: translateX(10px);
		}
	}

</style>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Sofia' rel='stylesheet' type='text/css'>

<div class='login'>
	<h2>Complete seu Cadastro</h2>
	{{Form::open(['route'=>['customer.clients.store', Auth::user()->id]])}}
	<input id="name" name='user[name]' type='text' readonly="" value="{{Auth::user()->name}}">
	<input id="name" name='user[email]' type='text' nullable="" value="{{Auth::user()->email}}">
	<input id="name" name='user[password]' type='password' value="">
	<input id="name" name='user[password_confirmation]' type='password' value="">
	<input id="phone" name='phone' placeholder='Telefone' type='text'>
	<input id="neighborhood" name='neighborhood' placeholder='Bairro' type='text'>
	<input id="street" name='street' placeholder='Rua' type='text'>
	<input id="number" name='number' placeholder='Número' type='text'>
	<input id="complement" name='complement' placeholder='Complemento' type='text'>
	<input id="city" name='city' placeholder='Cidade' type='text'>	
	<input id="zipcode" name='zipcode' placeholder='CEP' type='text'>	
	<select id="state" name="state" >
		<option value="" disabled selected>Selecione o Estado</option>
		<option value="AC">Acre</option>
		<option value="AL">Alagoas</option>
		<option value="AP">Amapá</option>
		<option value="AM">Amazonas</option>
		<option value="BA">Bahia</option>
		<option value="CE">Ceará</option>
		<option value="DF">Distrito Federal</option>
		<option value="ES">Espirito Santo</option>
		<option value="GO">Goiás</option>
		<option value="MA">Maranhão</option>
		<option value="MS">Mato Grosso do Sul</option>
		<option value="MT">Mato Grosso</option>
		<option value="MG">Minas Gerais</option>
		<option value="PA">Pará</option>
		<option value="PB">Paraíba</option>
		<option value="PR">Paraná</option>
		<option value="PE">Pernambuco</option>
		<option value="PI">Piauí</option>
		<option value="RJ">Rio de Janeiro</option>
		<option value="RN">Rio Grande do Norte</option>
		<option value="RS">Rio Grande do Sul</option>
		<option value="RO">Rondônia</option>
		<option value="RR">Roraima</option>
		<option value="SC">Santa Catarina</option>
		<option value="SP">São Paulo</option>
		<option value="SE">Sergipe</option>
		<option value="TO">Tocantins</option>
	</select>
	
	<br>
	<br>

	<input class='animated' type='submit' value='Register'>
</div>


@endsection