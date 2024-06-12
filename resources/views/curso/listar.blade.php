
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Libros</title>
    <style>
        body {
            background-color: #121212;
            color: #FFFFFF;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
            margin: 0;
        }

        h1 {
            color: #BB86FC;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            max-width: 800px;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid #BB86FC;
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #1F1F1F;
        }

        tr:nth-child(even) {
            background-color: #2C2C2C;
        }

        tr:hover {
            background-color: #3E3E3E;
        }

        a {
            color: #03DAC6;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        button {
            background-color: #BB86FC;
            color: #121212;
            padding: 8px 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #3700B3;
        }
    </style>
</head>
<body>

    <h1>Hola desde listar 2</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>titulo</th>
                <th>isbn</th>
                <th>editorial</th>
                <th>paginas</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($libros as $libros)
            <tr>
                <td>{{ $libro->id }}</td>
                <td>{{ $libro->titulo }}</td>
                <td>{{ $libro->isbn }}</td>
                <td>{{ $libro->editorial }}</td>
                <td>{{ $libro->paginas }}</td>
                <td><a href="{{ route('libro.show', $libro->id) }}">Mostrar</a></td>
                <td>
                    <form action="{{ route('libro.destroy', $libro->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que quieres eliminar este libro?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Eliminar</button>
                    </form>  
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>