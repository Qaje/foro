<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Laravel Eloquent ORM</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
        <style>
          body{
            margin-top: 50 px;
          }
        </style>
    </head>
    <body>
            <nav class="navbar navbar-inverse navbar-fixed-top">
                <div class="container">
                    <a href="{{ route('home') }}" class="navbar-brand">Eloquent ORM</a>
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="{{ route('home') }}">Home</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="jumbotron">
                <div class="container">
                    <h1>Curso Eloquent ORM</h1>
                    <p>Texto</p>
                </div>
            </div>
            <div class="container">
                @yield('content')
            </div>
                <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>


    </body>
</html>
