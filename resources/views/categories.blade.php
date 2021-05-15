@extends('layouts.master')
@section('title','Все категории ')
@section('content')
@foreach($categories as $category)
<div class="panel">
    <a href="{{route('category',$category->code)}}" style="text-decoration: none; color: gray">
        <img src="" alt="">
        <h2>{{$category->name}}[{{$category->products->count()}}]</h2>
    </a>
    <p>
        {{$category->description}}
    </p>
</div>
@endforeach
@endsection
