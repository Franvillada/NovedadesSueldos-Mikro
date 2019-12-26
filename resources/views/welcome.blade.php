<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="css/app.css">
        <!-- Styles -->
    </head>
    <body>
        <div class="home-container">
            <div class="row">
                <div class="col-12">
                    <h1>MR y Asociados</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-4 offset-4">
                    <form action="/login" method="POST" class="d-flex flex-column">
                        @csrf
                        <input type="text" name="usuario" id="usuario">
                        <label for="usuario">Usuario:</label>
                        <input type="password" name="contraseña" id="contraseña">
                        <label for="contraseña">Contraseña:</label>
                        <input type="submit" value="Ingresar">
                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                    </form>
                </div>
            </div>
            
        </div>
    </body>
    <script src="js/app.js"></script>
</html>
