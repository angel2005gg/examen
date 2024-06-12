<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del libro</title>
</head>
<body>
    <h1>Detalles del libro</h1>
    <ul>
        <li>titulo:              {{ $libro->titulo }}</li>
        <li>isbn:            {{ $libro->isbn }}</li>
        <li>editorial: {{ $libro->editorial }}</li>
        <li>paginas:            {{ $libro->paginas }}</li>
     
    </ul>
</body>
</html>