<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Libro</title>
</head>
<body>
    <h1>Editar Libro</h1>
    
    <form action="{{ route('libro.update', $libro->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>
            Título:
            <br>
            <input type="text" name="titulo" value="{{ old('titulo', $libro->titulo) }}">
        </label>
        <br>
        <label>
            ISBN:
            <br>
            <input type="text" name="isbn" value="{{ old('isbn', $libro->isbn) }}">
        </label>
        <br>
        <label>
            Editorial:
            <br>
            <input type="text" name="editorial" value="{{ old('editorial', $libro->editorial) }}">
        </label>
        <br>
        <label>
            Páginas:
            <br>
            <input type="number" name="paginas" value="{{ old('paginas', $libro->paginas) }}">
        </label>
        <br>
        
        <button type="submit">Actualizar Libro</button>
    </form>
</body>
</html>
