@extends('layout')
@section('content')


    <h1> Skapa ditt nya inlägg </h1>
    <form method="POST" action="/blogs">
        {{csrf_field()}}
        <div class="form-group">
            <input class="form-control" type="text" name="title" placeholder="Inläggs titel.">
        </div>
        
        <div class="form-group">
            <textarea class="form-control" name="description" placeholder="description"></textarea>
        </div>
        <div>
            <button type="submit" class="btn btn-primary">Ladda upp</button>
        </div> 
        </div>  
    </form>
@endsection