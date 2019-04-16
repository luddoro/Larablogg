@extends('layouts.layout')
@section('content')
    
    
<div class="main-content">
    <div class="container">
        <div class="content">
            <header class="text-center">
                <h1 class="header-title"> Process att skapa blogg i Laravel </h1></header>

            <h3>Session 1.Basic Routing och setup. 14/04/2019</h3>
            <p>Jag har fixat basic routing till sidan. Fixat en bootstrap navbar samt en login med laravels Auth funktion. Hittils har allting gått bra.</p>
            <br>

            <h3> Session 2. Form handling och databas. 15/04/2019 </h3>
            <p> Jag har börjat fippla med uppladdningsfunktionen. Inte riktigt klar än, ska styla formen och koppla den till databasen. </p>
            <br>

            <h3> Session 3. Klargöra grunder 15/04/2019 </h3>
            <p> Fixat en basic styling och med lite hjälp fixat grundläggande uppladdningsfunktion </p>
            <br>

            <h3> Session 4. Grundläggande edit funktion 16/04/2019</h3>
            <p> Skapat en edit funktion så att man nu kan redigera redan existerande blogginlägg. 
                Ända problemet jag stötte på var att textarea vägrade visa vad som tidigare stod (för usern i webbläsaren). 
                Visade sig att textareas inte har value attributes, man sätter bara mellan textarea och /textarea. </p>
            <br>

            <h3> Session 5. Misstolkade edit output 16/04/2019</h3>
            <p> Misstolkade edits output tidigare, visade sig att den var buggad och skapade istället ett nytt projekt.
                jag har fixat bugget och även lagt till en delete funktion </p>
            <br>
        </div>
    </div>
</div>

@endsection
