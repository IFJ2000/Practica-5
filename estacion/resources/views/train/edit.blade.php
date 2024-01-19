<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('train.update', ['train' => $train, 'id' => $train->id]) }}" method="post">
        @csrf {{-- Por proteccion --}}
        {{ method_field('PUT') }}
        <label for="">Nombre:</label>
        <input type="text" name="name" value="{{ $train->name }}"><br><br>
        <label for="">Pasajeros</label>
        <input type="text" name="passengers" value="{{ $train->passengers }}"><br><br>
        <label for="">Año</label>
        <input type="number" name="year" value="{{ $train->year }}"><br><br>
        {{-- HAY QUE USAR UN SELECT en vez de un input --}}
        <label for=""> Nombre de Tipo de tren</label>

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
