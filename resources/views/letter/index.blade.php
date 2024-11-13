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
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Sender</th>
                <th scope="col">Recipient</th>
                <th scope="col">Date sent</th>
                <th scope="col">Experation date</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($letters as $item)                    
                <tr onclick="window.location='{{ route('letters.show', ['letter' => $item->id]) }}';" style="cursor: pointer;">
                        <th scope="row">{{ $item->id }}</th>
                        <td>{{ $item->sender->name }}</td>
                        <td>{{ $item->recipient->name }}</td>
                        <td>{{ $item->sent_date }}</td>
                        <td>{{ $item->expiration_date }}</td>
                </tr>
                @endforeach
            </tbody>
          </table>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>
