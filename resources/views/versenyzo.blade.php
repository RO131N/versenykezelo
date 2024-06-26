<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="/js/versenyzo.js"></script>
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
        <title>Versenyző felvétel</title>
    </head>
    <body class="bg-dark text-white">
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link text-secondary" href="/">Versenykezelés </a>
      <a class="nav-item nav-link text-secondary" href="fordulo">Fordulókezelés </a>
      <a class="nav-item nav-link active text-primary" href="#">Versenyző<span class="sr-only">(current)</span></a>
    </div>
  </div>
</nav>
    <div class="form-group">
                        
                    </div>
        <div class="container p-3">
            <h1 class="bg-info p-3 rounded">Versenyzőkezelő</h1>
            <form id="addform">
                {{csrf_field()}}
                    <div class="border p-3 rounded">
                        <h2 class="m-0">Fordulóhoz rendelés</h2>
                        <div class="form-group">
                            <h5>Versenyző neve</h5>
                            <div class="input-group input-group-sm mb-3">
                                <input
                                    type="text"
                                    class="form-control"
                                    name="nev"
                                    id="nev"
                                    placeholder="Versenyző neve"
                                />
                            </div>
                        </div>
                        <div class="form-group">
                            <h5>Forduló dátuma</h5>
                            <div class="input-group input-group-sm mb-3">
                                <input
                                    type="text"
                                    class="form-control"
                                    name="forddatum"
                                    id="forddatum"
                                    placeholder="YYYY-MM-DD"
                                />
                            </div>
                        </div>
                        <div class="form-group">
                            
                        <input type="submit" value="Hozzáadás" class="btn btn-light mt-5 float-right buttonv">
                        </div>
                    </div>
                </form>
                <br>
                <p id="jelv">Jelenlegi versenyzők:</p>
                <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Versenyző neve</th>
                            <th>Forduló dátuma</th>
                            <th>Törlés</th>
                        </tr>
                    </thead>
                    <!-- Ide lesznek töltve az adatok -->
                    <tbody> 
                    </tbody>
                </table>

            </div>
        </div>
    </body>
</html>