<x-app-layout>
    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TouristRent</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    </head>
    <body>
        <!-- Nuevo container para el logo y el botón de login -->
        <div class="container-fluid bg-light">
            <div class="container">
                <p>Dades esborrades</p>
                <a href="{{ url('dashboard') }}">Tornar a la taula cap de cap de departament</a>
            </div>
        </div>  
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    </body>
    </html>
    </x-app-layout>