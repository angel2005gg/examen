<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Curso</title>
    <style>
        body {
            background-color: #121212;
            color: #FFFFFF;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        h1 {
            color: #BB86FC;
        }

        form {
            background-color: #1E1E1E;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 20px;
            border: none;
            border-radius: 5px;
            background-color: #2C2C2C;
            color: #FFFFFF;
        }

        button {
            background-color: #BB86FC;
            color: #121212;
            padding: 10px 20px;
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

    <h1>Crear curso</h1>

    <form action="{{ route('cursos.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label>
            Nombre:
            <input type="text" name="name" required>
        </label>

        <label>
            Descripción:
            <input type="text" name="descripcion" required>
        </label>

        <button type="submit">Enviar Formulario</button>
    </form>

</body>
</html>