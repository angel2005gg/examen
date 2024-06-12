<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>libros</h1>

@if (session('success'))
    <div>{{ session('success') }}</div>
@endif

<form action="{{ route('libro.store') }}" method="post" enctype="multipart/form-data">
    @csrf

    <label>
        titulo:
        <br>
        <input type="string" name="titulo">
    </label>
    <br>
    <label>
        isbm:
        <br>
        <input type="string" name="isbm">
    </label>
    <br>
    <label>
        editorial:
        <br>
        <input type="string" name="editorial">
    </label>
    <br>
    <label>
        paginas:
        <br>
        <input type="string" name="paginas">
    </label>
    <br>
    
    <br>
    <button type="submit">añadir libro</button>
</form>
</body>
</html>