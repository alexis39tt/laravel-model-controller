<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/app.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Headland+One&family=Lexend+Deca:wght@400;800&display=swap"
        rel="stylesheet">
    <title>Movies</title>
</head>

<body>
<div class="container">
    @foreach ($movielist as $elm)
        <div class="movie">
            <p class="title">{{ $elm['title'] }}</p>
            <p>Anno: {{ date('Y', strtotime($elm['date'])) }}</p>
            <p>Voto: {{ round($elm['vote']) }}</p>
        </div>
    @endforeach
</div>
</body>

</html>
