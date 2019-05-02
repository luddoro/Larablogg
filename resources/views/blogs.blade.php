@extends('layouts.layout')
@section('content')
    

    <div class="main-content">
        <div class="container">
            <div class="content">
                <header class="text-center">
                    <h1>Lista av dina blogginlägg</h1>
                </header>
                        
            @foreach ($blogs as $blog)
            <li><a href="{{route('blogs.edit', $blog->id)}}">{{$blog->title}}</a></li>

            @endforeach 
           
            <a class="btn btn-primary" href="/blogs/create">Skapa inlägg</a>
            </div>
        </div>
    </div
@endsection
    