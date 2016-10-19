@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Meu Pedido</h3>
        <div class="container">
            <a href="{{route('customer.order.selectCategory')}}" class="btn btn-default">Continuar Comprando...</a>
            <br><br>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Produto</th>
                    <th>Quantidade</th>
                    <th>Valor Unitário</th>
                    <th>Subtotal</th>
                    <th>Ação</th>
                </tr>
                </thead>
                <tbody>
                @foreach(Cart::content() as $row)
                    <tr>
                        <td>{{$row->name}}</td>
                        <td>{{$row->qty}}</td>
                        <td>{{$row->price}}</td>
                        <td>{{$row->total}}</td>
                        <td></td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            {!! Form::submit('Finalizar Pedido', ['class'=>'btn btn-primary']) !!}
        </div>
    </div>
@endsection