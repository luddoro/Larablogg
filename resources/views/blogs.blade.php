@extends('layouts.layout')
@section('content')

@foreach ($blogs as $blog)
    <li> {{$blog->title}} </li>
    
@endforeach 
<a class="btn btn-info" href="blogs/create">Skapa inlägg</a>
<a class="btn btn-info" href="blogs/1/edit">Redigera inlägg</a>
@endsection 
    