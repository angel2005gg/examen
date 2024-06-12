<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista de Libros</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <h1>Lista de libros</h1>

  <table id="libro-table">
    <thead>
      <tr>
        <th style="background-color: #3498db; color: white;">ID</th>
        <th style="background-color: #3498db; color: white;">Título</th>
        <th style="background-color: #3498db; color: white;">ISBN</th>
        <th style="background-color: #3498db; color: white;">Editorial</th>
        <th style="background-color: #3498db; color: white;">Páginas</th>
        <th style="background-color: #3498db; color: white;">Acciones</th>
      </tr>
    </thead>

    <tbody>
      @foreach ($libros as $libro)
        <tr>
          <td>{{ $libro->id }}</td>
          <td>{{ $libro->titulo }}</td>
          <td>{{ $libro->isbn }}</td>
          <td>{{ $libro->editorial }}</td>
          <td>{{ $libro->paginas }}</td>
          <td>
            <a href="{{ route('libro.show', $libro->id) }}">Mostrar</a>
            <a href="{{ route('libro.edit', $libro->id) }}">Editar</a>
            <form action="{{ route('libro.destroy', $libro->id) }}" method="POST" style="display:inline;">
              @csrf
              @method('DELETE')
              <button type="submit" style="background:none; border:none; color:red; cursor:pointer;">Eliminar</button>
            </form>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</body>
</html>
