@extends('layouts.layout')
@section('content')
    

    <div class="main-content">
        <div class="container">
            <div class="content">
                    <a class="btn btn-primary" href="/blogs/create">Skapa inlägg</a>
                    <a class="btn btn-primary" href="blogs/1/edit">Redigera inlägg</a>
                <header class="text-center">
                    <h1>Lista av dina blogginlägg</h1>
                </header>
                        
            @foreach ($blogs as $blog)
            <li> {{$blog->title}} </li>

            @endforeach 
           
            </div>
        </div>
    </div
@endsection
    