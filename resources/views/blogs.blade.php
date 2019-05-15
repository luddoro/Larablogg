@extends('layouts.layout')
@section('content')

    <h1>Lista av dina blogginlägg</h1>
    <ol class="rounded-list">            
        @foreach ($blogs as $blog)
        <li>
            <a class="posts" href="{{route('blogs.show', $blog->id)}}">{{$blog->title}}</a>
                
            </li>
        

        @endforeach 
        
    </ol>   
    <form>
        <a class="btn btn-gold" href="/blogs/create">Skapa inlägg</a>
    </form>

            
@endsection
    