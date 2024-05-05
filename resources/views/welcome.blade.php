<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="css/alap.css" />
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active text-primary" href="#">Versenykezelés <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link text-secondary" href="versenyzo">Versenyzo</a>
    </div>
  </div>
</nav>
    <div class="form-group">
    
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
                                placeholder="Verseny megnevezése"
                            />
                        </div>
                    </div>
                    <h5>Verseny dátuma</h5>
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
                    <h5>Versenyen elérhető nyelvek</h5>
                        <div class="input-group input-group-sm mb-3">
                            <input
                                type="text"
                                class="form-control"
                                placeholder="Versenyen elérhető nyelvek"
                            />
                        </div>
                    <h5>Verseny helyszíne</h5>
                    <div class="input-group input-group-sm mb-3">
                        <input
                            type="text"
                            class="form-control"
                            placeholder="Verseny helyszíne"
                        />
                    </div>
                    <div class="form-group">
                        <button
                            type="submit"
                            class="btn btn-light mt-5 float-right buttonv"
                        >
                            Felvétel
                        </button>
                    </div>
                </div>
            </form>
            <br>
            <p id="jelv">Jelenlegi versenyek:</p>
                    
                @foreach($versenyek as $verseny)
                <p>{{$verseny->megnevezes}}</p>
                @endforeach
            <br />
            <div class="lathatof">
                <form action="">
                    <div class="border p-3 rounded">
                        <h2 class="m-0">Új forduló felvétele</h2>
                        <div class="form-group">
                            <h5>Verseny megnevezése</h5>
                            <div class="input-group input-group-sm mb-3">
                                <input
                                    type="text"
                                    class="form-control"
                                    placeholder="Verseny megnevezése"
                                />
                            </div>
                        </div>
                        <h5>Forduló dátuma</h5>
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
                                class="btn btn-light mt-5 float-right buttonf"
                            >
                                Felvétel
                            </button>
                        </div>
                    </div>
                </form>
                        <br>
                <p id="jelf">Jelenlegi fordulók:</p>
                @foreach($fordulok as $fordulo)
                <p>{{$fordulo->versenyid}}</p>
                @endforeach

                <hr />
            </div>
            <div class="lathatov">
                <form action="">
                    <div class="border p-3 rounded">
                        <h2 class="m-0">Fordulóhoz rendelés</h2>
                        <div class="form-group">
                            <h5>Forduló kódja</h5>
                            <div class="input-group input-group-sm mb-3">
                                <input
                                    type="text"
                                    class="form-control"
                                    placeholder="Forduló kódja"
                                />
                            </div>
                        </div>
                        <div class="form-group">
                            <h5>Versenyző neve</h5>
                            <div class="input-group input-group-sm mb-3">
                                <input
                                    type="text"
                                    class="form-control"
                                    placeholder="Versenyző neve"
                                />
                            </div>
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
        </div>
        <script>
            $(function () {
                $("#datumvalaszto").datetimepicker();
            });
        </script>
    </body>
</html>