<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="/js/verseny.js"></script>
        <meta name="csrf-token" content="{{ csrf_token() }}">
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
      <a class="nav-item nav-link text-secondary" href="fordulo">Fordulókezelés </a>
      <a class="nav-item nav-link text-secondary" href="versenyzo">Versenyző</a>
    </div>
  </div>
</nav>
    <div class="form-group">
    
        <div class="container p-3">
            <h1 class="bg-info p-3 rounded">Versenykezelő</h1>
            <form id="addform">
                {{csrf_field()}}
                <div class="border p-3 rounded">
                    <h2 class="m-0">Új verseny felvétele</h2>
                    <div class="form-group">
                        <h5>Verseny megnevezése</h5>
                        <div class="input-group input-group-sm mb-3">
                            <input
                                type="text"
                                class="form-control"
                                id="megnevezes"
                                name="megnevezes"
                                placeholder="Verseny megnevezése"
                            />
                        </div>
                    </div>
                    <h5>Verseny éve</h5>
                    <div class="input-group date form-group" id="datumvalaszto">
                        <input
                            type="text"
                            class="form-control"
                            id="datum"
                            name="datum"
                            placeholder="YYYY"
                        />
                    </div>
                    <h5>Versenyen elérhető nyelvek</h5>
                        <div class="input-group input-group-sm mb-3">
                            <input
                                type="text"
                                class="form-control"
                                id="nyelvek"
                                name="nyelvek"
                                placeholder="Versenyen elérhető nyelvek"
                            />
                        </div>
                    <h5>Pontok jó válaszért</h5>
                    <div class="input-group input-group-sm mb-3">
                        <input
                            type="number"
                            class="form-control"
                            id="jopontok"
                            name="jopontok"
                            placeholder="Jó válaszért szerezhető pontok"
                        />
                    </div>
                    <h5>Pontok rossz válaszért</h5>
                    <div class="input-group input-group-sm mb-3">
                        <input
                            type="number"
                            class="form-control"
                            id="rosszpontok"
                            name="rosszpontok"
                            placeholder="Rossz válaszért szerezhető pontok"
                        />
                    </div>
                    <h5>Pontok üres válaszért</h5>
                    <div class="input-group input-group-sm mb-3">
                        <input
                            type="number"
                            class="form-control"
                            id="urespontok"
                            name="urespontok"
                            placeholder="Üres válaszért szerezhető pontok"
                        />
                    </div>
                    <div class="form-group">
                    <input type="submit" value="Hozzáadás" class="btn btn-light mt-5 float-right buttonv">
                    </div>
                </div>
            </form>
            <br>
            <p id="jelv">Jelenlegi versenyek:</p>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Megnevezés</th>
                            <th>Verseny éve</th>
                            <th>Elérhető nyelvek</th>
                            <th>Jó válaszokért járó pontok</th>
                            <th>Rossz válaszokért járó pontok</th>
                            <th>Üres válaszokért járó pontok</th>
                        </tr>
                    </thead>
                    <!-- ide lesznek töltve az adatok -->
                    <tbody> 
                    </tbody>
                </table>

            </div>
    </body>
</html>