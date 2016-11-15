@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Meu Pedido</h3>
        <div class="container">
            <a href="{{route('customer.order.selectCategory')}}" class="btn btn-primary">Continuar Comprando...</a>
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
                        <td><a href="{{route('customer.order.downFromCart', $row->rowId)}}" class="btn btn-warning">-</a><input value="{{$row->qty}}" readonly>
                            <a href="{{route('customer.order.upFromCart', $row->rowId)}}" class="btn btn-warning">+</a></td>
                        <td>{{$row->price}}</td>
                        <td>{{$row->subtotal}}</td>
                        <td align="center"><a href="{{route('customer.order.removeFromCart', $row->rowId)}}" class="btn btn-danger" onclick="return confirm('Remover do pedido?')">Remover</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <h3 align="right">Total do Pedido: R$ {{Cart::subtotal()}}</h3>
            <a href="{{route('customer.order.store')}}" class="btn btn-success" onclick="return confirm('Após finalizado o pedido não pode ser alterado ou editado!')">Finalizar Pedido</a>
        </div>
    </div>
    
@endsection