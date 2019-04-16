@extends('layouts.layout')
@section('content')
    <a class="btn btn-info" href="blogs/create">Skapa inlägg</a>
    <a class="btn btn-info" href="blogs/1/edit">Redigera inlägg</a>

    <div class="main-content">
        <div class="container">
            <div class="content">
                <header class="text-center">
                    <h1>Lista av blogginlägg</h1>
                </header>
                        
            @foreach ($blogs as $blog)
            <li> {{$blog->title}} </li>

            @endforeach 
           
            </div>
        </div>
    </div
@endsection
    