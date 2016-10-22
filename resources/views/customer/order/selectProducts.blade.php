@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Selecione o Produto</h3>

        <div class="row">
            @foreach($products as $product)
                <a href="{{route('customer.order.create', $product->id)}}">
                    <div class="col-xs-3">
                        <div class="project project-default">
                            <div class="shape">
                                <div class="shape-text">
                                </div>
                            </div>
                            <div class="project-content">
                                <p>
                                <h3>{{$product->name}}</h3>
                                <h2>{{$product->price}}</h2>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div><!--/row-->
    </div><!--/container -->
@endsection