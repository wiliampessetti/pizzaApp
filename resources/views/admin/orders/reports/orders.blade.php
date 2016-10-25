
@extends('layouts.report')
@section('content')

    <h1>Relatório de Pedidos</h1>


    <table class="table table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>Total</th>
            <th>Data</th>
            <th>Itens</th>
            <th>Entregador</th>
            <th>Status</th>
        </tr>
        </thead>
        <tbody>
        @foreach($orders as $order)
            <tr>
                <td>{{$order->id}}</td>
                <td>R$ {{$order->total}}</td>
                <td>{{$order->created_at}}</td>
                <td>
                    <ul>
                        @foreach($order->items as $item)
                            <li>{{$item->product->name}}</li>
                        @endforeach
                    </ul>
                </td>
                <td>
                    @if($order->deliveryman)
                        {{$order->deliveryman->name}}
                    @else
                        Entregador Indefinido.
                    @endif
                </td>
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
@endsection()