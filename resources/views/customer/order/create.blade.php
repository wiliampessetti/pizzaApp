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
                        <td>{!! Form::number('qtd', $row->qty, ['class'=>'form-control']) !!}</td>
                        <td>{{$row->price}}</td>
                        <td>{{$row->subtotal}}</td>
                        <td></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <h3 align="right">Total do Pedido: R$ {{Cart::subtotal()}}</h3>
            <a href="{{route('customer.order.store')}}" class="btn btn-primary" onclick="return confirm('Após finalizado o pedido não pode ser alterado ou editado!')">Finalizar Pedido</a>
        </div>
    </div>
@endsection