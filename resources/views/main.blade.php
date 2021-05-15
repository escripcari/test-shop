@extends('layouts.app')


@section('title')
    {{$title}}
@endsection


@section('nav')
    @parent
    @foreach($nav as $navLink)
    <li><a href="{{$navLink['href']}}">{{$navLink['name_page']}}</a></li>
    @endforeach
@endsection


@section('content')
        {!!$main!!}
@endsection
