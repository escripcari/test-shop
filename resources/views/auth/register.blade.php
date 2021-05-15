@extends('auth.layout.master')

@section('title','Регистрация')

@section('content')
    <form action="{{route('register')}}" method="post" aria-label="Register">

        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">Имя: </label>
            <div class="col-md-6">
                <input type="text" id="name" name="name" class="form-control" value="" required autofocus>
            </div>
        </div>
        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">E-mail: </label>
            <div class="col-md-6">
                <input type="email" name="email" id="email" class="form-control" value="" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="password" class="col-md-4 col-form-label text-md-right">Пароль: </label>
            <div class="col-md-6">
                <input type="password" name="password" id="password" class="form-control" value="" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Подтвердите пароль: </label>
            <div class="col-md-6">
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" value="" required>
            </div>
        </div>
        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                @csrf
                <button type="submit" class="btn btn-primary">
                    Зарегестрироватся
                </button>
            </div>
        </div>
    </form>

@endsection
