@extends('layouts.layout')
@section('content')
                
    <h1>{{$blogs->title}}</h1>
    <p> {{$blogs->description}}</p>
    <a class="btn btn-gold" href="{{route('blogs.edit', $blogs->id)}}">Redigera </a>

@endsection