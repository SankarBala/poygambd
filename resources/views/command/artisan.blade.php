<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artisan Commands</title>
    <style type="text/css">
        body {
            background-color: aqua;
        }
    </style>
</head>

<body>
    <center>
        <div class="row">
            <h1>Artisan Commands</h1>
            @if (Session::has('message'))
            <h2>  {{  Session::get('message')}} </h2>
                @endif

        </div>
        <div class="row">
            <form action="{{ route('command.store') }}" method="post">
                @csrf
                <input type="text" name="command" size="50" autocomplete="command"/>
                <input type="password" name="secret" size="20" placeholder="Command secret" autocomplete="false"/>
                <input type="submit" value="Run" />

            </form>
        </div>
    </center>
</body>

</html>