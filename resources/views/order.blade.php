@extends('layouts.master')
@section('title', 'Оформить заказ')

@section('content')

        <h1>Подтвердите заказ</h1>
        <div class="container">
            <div class="row justify-content-center">
                <p>Общая стоймость заказа: {{$order->getFullPrice()}}</p>
                <form action="{{route('basket-confirm')}}" method="POST">
                    <div>
                        <p>Укажите свои имя и номер чтобы наш менеджер мог с вами связатся</p>
                        <div class="container">
                            <div class="form-group">
                                <label for="name" class="control-label col-lg-offset-3 col-lg2">Имя: </label>
                                <div class="col-lg-4">
                                    <input type="text" name="name" id="name" value="" class="form-control">
                                </div>
                            </div>
                            <br>
                            <br>
                            <div class="form-group">
                                <label for="phone" class="control-label col-lg-offset-3 col-lg-2">Номер
                                    телефона: </label>
                                <div class="col-lg-4">
                                    <input type="text" name="phone" id="phone" value="" class="form-control">
                                </div>
                            </div>
                            <br>
                            <br>
                            <div class="form-group">
                                <label for="email" class="control-label col-lg-offset-3 col-lg-2">Email: </label>
                                <div class="col-lg-4">
                                    <input type="email" name="email" id="email" value="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <br>
                        <br>
                        <br>
                        @csrf
                        <input type="submit" class="btn btn-success"   value="подтвердить заказ">
                    </div>
                </form>
            </div>
        </div>

@endsection
