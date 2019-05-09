@extends('layouts.layout')
@section('content')


    <h1>Lista av dina blogginlägg</h1>
    <ul>            
    @foreach ($blogs as $blog)
    <li><a href="{{route('blogs.show', $blog->id)}}">{{$blog->title}}</a></li>

    @endforeach 
    </ul>   
    <form>
        <a class="btn btn-gold" href="/blogs/create">Skapa inlägg</a>
    </form>

            
@endsection
    