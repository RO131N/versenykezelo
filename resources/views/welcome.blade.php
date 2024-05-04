<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="alap.css" />
        <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
        <script src="/js/alap.js"></script>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
            crossorigin="anonymous"
        />
        <script
            src="https://code.jquery.com/jquery-3.7.1.js"
            integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
            crossorigin="anonymous"
        ></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/js/bootstrap-datetimepicker.min.js"></script>
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css"
        />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css"
        />
        <title>Versenykezelő</title>
    </head>
    <body class="bg-dark text-white">
        
        <div class="container p-3">
            <h1 class="bg-info p-3 rounded">Versenykezelő</h1>
            <form action="">
                <div class="border p-3 rounded">
                    <h2 class="m-0">Új verseny felvétele</h2>
                    <div class="form-group">
                        <h5>Verseny megnevezése</h5>
                        <div class="input-group input-group-sm mb-3">
                            <input
                                type="text"
                                class="form-control"
                                placeholder="Verseny neve"
                            />
                        </div>
                    </div>
                    <div class="input-group date form-group" id="datumvalaszto">
                        <input
                            type="text"
                            class="form-control"
                            placeholder="Dátum"
                        />
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                    <div class="form-group">
                        <button
                            type="submit"
                            class="btn btn-light mt-5 float-right"
                        >
                            Felvétel
                        </button>
                    </div>
                </div>
            </form>
            <p id="jelv">Jelenlegi versenyek:</p>
                    
                @foreach($versenyek as $verseny)
                <p>{{$verseny->megnevezes}}</p>
                @endforeach
                @foreach($fordulok as $fordulo)
                <p>{{$fordulo->versenyid}}</p>
                @endforeach
                @foreach($versenyzok as $versenyz)
                <p>{{$versenyz->nev}}</p>
                @endforeach
                @foreach($felhasznalok as $felh)
                <p>{{$felh->email}}</p>
                @endforeach
                !

            <br />
            <br />
            <div id="lathatof">
                <hr />
                <h2>Új forduló felvétele</h2>
                <br />
                <div class="mycontainerr">
                    <div>
                        <p id="fordvernev">Verseny neve</p>
                        <input
                            type="text"
                            name="fordnevbe"
                            id="fordnevbe"
                            class="fordnevbe"
                        />
                    </div>
                    <div>
                        <p id="forddat">Forduló dátum</p>
                        <input
                            type="date"
                            name="forddatbe"
                            id="forddatbe"
                            class="forddatbe"
                        />
                    </div>
                </div>

                <button class="buttonf">Felvétel</button>
                <p id="jelf">Jelenlegi fordulók:</p>
                <hr />
            </div>
            <div id="lathatov">
                <h2>Fordulóhoz rendelés</h2>
                <br />
                <div class="mycontainerrr">
                    <div>
                        <p id="versenyzfordszam">Forduló kódja</p>
                        <input
                            type="text"
                            name="forduloszambe"
                            id="forduloszambe"
                            class="forduloszambe"
                        />
                    </div>
                    <div>
                        <p id="versenyznev">Versenyző neve</p>
                        <input
                            type="text"
                            name="versenyzo"
                            id="versenyzo"
                            class="versenyzo"
                        />
                    </div>
                </div>

                <br />
                <br />
                <br />
                <button class="buttonve">Felvétel</button>
            </div>
        </div>
        <script>
            $(function () {
                $("#datumvalaszto").datetimepicker();
            });
        </script>
    </body>
</html>