<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $user->name }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="row">
                <div class="col-12">
                    <h1> {{ $user->name }} </h1>
                    <h3>{{ $user->email }} </h3>

                    <p>
                        <strong>Instragram</strong>: {{ $user->profile->instagram}}<br>      
                        <strong>Github</strong>: {{ $user->profile->github}}<br>
                        <strong>Web</strong>: {{ $user->profile->web}}<br>
                    </p>
                </div>
            </div>
        </div>
    </body>
</html>
