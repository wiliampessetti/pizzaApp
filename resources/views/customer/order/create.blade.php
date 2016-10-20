@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Meu Pedido</h3>
        <div class="container">
            {!! Form::open(['route'=>'customer.order.store', 'class'=>'form']) !!}
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
                    <input type="hidden" name="items[0][product_id]" value="{{$row->id}}">
                    <input type="hidden" name="items[0][price]" value="{{$row->price}}">
                    <tr>
                        <td>{{$row->name}}</td>
                        <td>{!! Form::number('items[0][qtd]', $row->qty, ['class'=>'form-control']) !!}</td>
                        <td>{{$row->price}}</td>
                        <td>{{$row->subtotal}}</td>
                        <td></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <h3 align="right">Total do Pedido: R$ {{Cart::subtotal()}}</h3>
            <div class="form-group">
                {!! Form::submit('Finalizar Pedido', ['class'=>'btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection