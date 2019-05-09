@extends('layouts.layout')
@section('content')
    

                <h1 class="header-title"> Process att skapa blogg i Laravel </h1>

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

            <h3> Glömda tillfällen + 09/05/2019 </h3>
            <p> Jag har glömt att dokumentera tidigare lektioner, har dock commits från några av dem. 
                Kortfattat så var en av de stora problemen jag stötte på med att userIDt, som används för att validera användare och endast visa användarens egna inlägg. 
                Det tog totalt 2 lektioner att hitta lösningen, som visade sig vara en protected fillable som inte hade userID value. 
                Denna hade jag ignorerat då jag antog att den var orelevant.</p>
            <br>
            <p> Första halvan av lektionen den nionde användes för att få frontend att se presentabelt ut. 
                Andra halvan användes för att rensa upp koden (flytta vissa delar till layout filen) och se till att koden validerar.
                Det ända bugget som nu återstår är att footern blockerar en viss bit av texten. Förutom detta återstår det bara tester och dokumentation.
            
                Lektionen har gått förvånansvärt bra och jag har inte stött på några större roadblocks. Jag börjar förstå mig på hur laravel är uppbyggt, och med lite hjälp kan jag fixa problem som uppstår.
            </p>
            <br>
            
            <p> Jag har även gjort några ändringar i sidans sitemap, något som jag bör ta upp i dokumentationen. 


@endsection
