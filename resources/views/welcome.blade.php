<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/alap.css">
        <title>Laravel</title>


    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <h1>Versenykezelő</h1>

        <h2>Új verseny felvétele</h2>
        <br>
        <div class="mycontainer">
        <div>
        <p id="vernev">Verseny megnevezése</p>
        <input type="text" name="vernevbe" id="vernevbe" class="vernevbe">
        </div>
        <div>
        <p id="verdat">Verseny dátum</p>
        <input type="date" name="verdatbe" id="verdatbe" class="verdatbe">
        </div>
        </div>
        <br>
        <br>
        <br>
        <input type="button" value="Felvétel" class="button">
        <br>
        <br>

        <hr>
        <h2>Új forduló felvétele</h2>
        <br>
    <div class="mycontainerr">
        <div>
        <p id="fordvernev">Verseny neve</p>
        <input type="text" name="fordnevbe" id="fordnevbe" class="fordnevbe">
        </div>
        <div>
        <p id="forddat">Forduló dátum</p>
        <input type="date" name="forddatbe" id="forddatbe" class="forddatbe">
        </div>
    </div>
        <br>
        <br>
        <br>
        <input type="button" value="Felvétel" class="button">
        <br>
        <br>
        <hr>

        <h2>Fordulóhoz rendelés</h2>
        <br>
    <div class="mycontainerrr">
        <div>
        <p id="versenyzvernev">Verseny neve</p>
        <input type="text" name="versenyzverbe" id="versenyzverbe" class="versenyzverbe">
        </div>
        <div>
        <p id="versenyzfordszam">Forduló száma</p>
        <input type="text" name="forduloszambe" id="forduloszambe" class="forduloszambe">
        </div>
        <div>
        <p id="versenyznev">Versenyző neve</p>
        <input type="text" name="versenyzo" id="versenyzo" class="versenyzo">
        </div>
    </div>
        <br>
        <br>
        <br>
        <input type="button" value="Felvétel" class="button">
        
        <hr>
    </body>
</html>
