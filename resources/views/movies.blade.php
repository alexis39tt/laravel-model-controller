<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/app.css" rel="stylesheet"> 
    <title>Movies</title>
</head>
<body>
    @foreach ($movielist as $elm)
        <p>{{ $elm }}</p>
    @endforeach
    
</body>
</html>
