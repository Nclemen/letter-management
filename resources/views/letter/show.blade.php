<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->


        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body class="antialiased">
        <div class="row">
        </div>
        <div>
            <div class="row">
                <div class="col-4 align-self-start">
                    <a href="{{ route('letters.index') }}" class="btn btn-primary" role="button">back</a>
                </div>
                <div class="col-4 align-self-center">
                    <h1>{{ $letter->id }}</h1>
                    <div>
                        <p>{{ $letter->description }}</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-evenly  ">
                <div class="col-4">
                    <p>
                    Day created: {{ $letter->created_at }}
                    </p>
                </div>
                <div class="col-4">
                    <p>
                    Day updated: {{ $letter->updated_at }}
                    </p>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>
