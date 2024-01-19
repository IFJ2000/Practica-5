<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('train.store') }}" method="post">
        @csrf {{-- Por proteccion --}}
        <label for="">Nombre sel tren:</label>
        <input type="text" name="name"><br><br>
        <label for="">Numero de pasajeros:</label>
        <input type="text" name="passengers"><br><br>
        <label for="">Año del tren</label>
        <input type="number" name="year"><br><br>
        <label for="">Tipo de Tren</label>
        <select name="train_type_id">
            @foreach ($train_types as $train_type)
                <option value={{ $train_type->id }}>
                    {{ $train_type->type }}
                </option>
            @endforeach
        </select>
        <input type="submit" value="Crear">
    </form>
</body>

</html>
