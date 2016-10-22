@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Meus Pedidos</h3>

        <a href="{{route('customer.order.selectCategory')}}" class="btn btn-default">Novo Pedido</a>
        <br><br>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Total</th>
                <th>Status</th>
            </tr>
            </thead>
            <tbody>
            @foreach($orders as $order)
            <tr>
                <td>{{$order->id}}</td>
                <td>{{$order->total}}</td>
                <td>
                    @if($order->status === 0)
                        Pendente
                    @elseif($order->status === 1)
                        A caminho
                    @elseif($order->status === 2)
                        Entregue
                    @elseif($order->status === 3)
                        Cancelado
                    @endif
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
        {!!$orders->render()!!}
    </div>
@endsection
