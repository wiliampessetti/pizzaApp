@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Selecione a Categoria</h3>

        <div class="row">
            @foreach($categories as $category)
                <a href="{{route('customer.order.selectProduct', $category->id)}}">
                <div class="col-xs-3">
                    <div class="project project-default">
                        <div class="shape">
                            <div class="shape-text">
                            </div>
                        </div>
                        <div class="project-content">
                            <p>
                                <h3>{{$category->name}}</h3>
                            </p>
                            <img src="{{ URL::to( '/img/categories/'.$category->image) }}" />
                        </div>
                    </div>
                </div>
                </a>
            @endforeach
        </div><!--/row-->
    </div><!--/container -->
    @endsection