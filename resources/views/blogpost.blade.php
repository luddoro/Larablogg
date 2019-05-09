@extends('layouts.layout')
@section('content')
    <div class="main-content">
        <div class="container">
            <div class="content">
                <header class="text-center">
                    <h1>{{$blogs->title}}</h1>
                    <p> {{$blogs->description}}</p>
                    <a class="btn btn-primary" href="{{route('blogs.edit', $blogs->id)}}">Redigera </a>
                </header>
            </div>
        </div>
    </div>
@endsection