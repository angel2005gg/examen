<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        Título:
        <br>
        <input type="text" name="titulo">
    </label>
    <br>
    <label>
        ISBN:
        <br>
        <input type="text" name="isbn">  
    </label>
    <br>
    <label>
        Editorial:
        <br>
        <input type="text" name="editorial">
    </label>
    <br>
    <label>
        Páginas:
        <br>
        <input type="text" name="paginas">
    </label>
    <br>
    
    <button type="submit">Añadir libro</button>
</form>
</body>
</html>
