@extends('layouts.layout')
@section('content')


     <h1> Skapa ditt nya inlägg </h1>
        <form method="POST" action="/blogs">
            {{csrf_field()}}
            <div class="form-group">
                <label for="title">Titel</label>
                <input class="form-control" type="text" name="title" id="title" placeholder="Inläggs titel." required>
            </div>
            
            <div class="form-group">
                <label for="title">Description</label>
                <textarea class="form-control" name="description" id="description" placeholder="description" required></textarea>
            </div>

            <div>
                <button type="submit" class="btn btn-gold">Ladda upp</button>
            </div> 

            @if ($errors->any())
                <ul>
                    @foreach ($errors->all() as $error)
                        <li> {{$error}} </li>
                    @endforeach
                </ul>
            @endif
        </form>


    @endsection