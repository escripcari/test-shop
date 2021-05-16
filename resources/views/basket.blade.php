@extends('layouts.master')
@section('title', 'Корзина')

@section('content')
    <h1></h1>
    <p></p>
    <div class="panel">

        <table class="table table-striped">
            <thead>
            <tr>
                <th>Название</th>
                <th>Количество</th>
                <th>Цена</th>
                <th>Стоймость</th>
            </tr>
            </thead>
            <tbody>
            @foreach($order->products as $product)
                <tr>
                    <td>
                        <a href="{{route('product', [$product->category->code, $product->code])}}">
                            <img height="56px" src="">
                            {{$product->name}}!!!{{$product->id}}
                        </a>
                    </td>
                    <td><span class="badge" style="color: dodgerblue">{{$product->pivot->count}}</span>
                        <div class="btn-group form-inline">
                            <form action="{{route('basket-add', $product)}}" method="POST">
                                <button type="submit" class="btn btn-success" href=""><span
                                        class="glyphicon glyphicon-plus" aria-hidden="true">+</span></button>
                                @csrf
                            </form>
                            <form action="{{route('basket-remove', $product)}}" method="POST">
                                <button type="submit" class="btn btn-danger" href=""><span
                                        class="glyphicon glyphicon-minus" aria-hidden="true">-</span></button>
                                @csrf
                            </form>
                        </div>
                    </td>
                    <td>{{$product->price}} лей</td>
                    <td>{{$product->getPriceForCount()}} лей</td>
                </tr>
            @endforeach
            <tr>
                <td colspan="3">Овщая стоймость</td>
                <td>{{$order->getFullPrice()}} лей</td>
            </tr>
            </tbody>
        </table>
        <br>
        <div class="btn-group pull-right" role="group">
            <a type="button" class="btn btn-success" href="{{ route('basket-place') }}">Оформить заказ</a>
        </div>
    </div>

@endsection
