@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Ops!</div>

                    <div class="panel-body">
                        Você não tem permissão para realizar essa operação pois encontramos pendências
                        vinculadas ao seu usuário, por favor entre em contato pelo
                        telefone (54) 9999-9999 para regularizar a situação.
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
