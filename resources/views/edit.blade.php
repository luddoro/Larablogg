@extends('layouts.layout')
@section('content')
    
    <h1> Redigera inlägg </h1>


    <form method="POST" action="/blogs/{{$blogs->id}}">
        {{ method_field('PATCH')}}
        {{csrf_field()}}


        <div class="form-group">
            <label for="title">Titel</label>
            <input class="form-control" type="text" name="title" id=title placeholder="Inläggs titel." value="{{$blogs->title}}">
        </div>

        <div class="form-group">
            <label for="descriptiondit">Description</label>
            <textarea class="form-control" name="description" id=description>{{$blogs->description}}</textarea>
        </div>

        <button type="submit" class="btn btn-gold">Redigera</button>
    </form>

    <form class="form-group" method="POST" action = "/blogs/{{$blogs->id}}">
        {{ method_field('DELETE')}}
        {{ csrf_field() }}
        <button type="submit" class="btn btn-danger">Radera</button>
    </form>




@endsection 