<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comics</title>
</head>
<body>
    <ul>
        @foreach ($comics as $comic)
            <li><a href="{{ route('single', $comic -> id) }}">{{ $comic }}</a></li>
        @endforeach
    </ul>
</body>
</html>