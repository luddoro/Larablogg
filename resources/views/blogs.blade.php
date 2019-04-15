@extends('layout')
@section('content')
<a class="btn btn-info" href="blogs/create">Skapa inlägg</a>
@foreach ($blogs as $blog)
    <li> {{$blog->title}} </li>
    <li> {{$blog->description}} </li>
@endforeach 

@endsection 
    