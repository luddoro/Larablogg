@extends('layouts.layout')
@section('content')

<header class="text-center">
    <h1 class="header-title"> Test för projekt att skapa en blog i laravel </h1>
        </span>
    </h1>
    
    
    <div class="main-content">
        <div class="container">
            <div class="content">
                <h3>Session 1.Basic Routing och setup. 14/04/2019</h3>
                <p>Jag har fixat basic routing till sidan. Fixat en bootstrap navbar samt en login med laravels Auth funktion. Hittils har allting gått bra.</p>
                <br>

                <h3> Session 2. Form handling och databas. 15/04/2019 </h3>
                <p> Jag har börjat fippla med uppladdningsfunktionen. Inte riktigt klar än, ska styla formen och koppla den till databasen. </p>
                <br>

                <h3> Session 3. Klargöra grunder 15/04/2019 </h3>
                <p> Fixat en basic styling och med lite hjälp fixat grundläggande uppladdningsfunktion </p>
                <br>

                <h3> Session 4. Grundläggande edit funktion </h3>
                <p> Skapat en edit funktion så att man nu kan redigera redan existerande blogginlägg. 
                    Ända problemet jag stötte på var att textarea vägrade visa vad som tidigare stod (för usern i webbläsaren). 
                    Visade sig att textareas inte har value attributes, man sätter bara mellan textarea och /textarea. </p>
                <br>
            </div>
        </div>
    </div>
</header>
@endsection
