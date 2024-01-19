<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('ticket.store') }}" method="post">
        @csrf {{-- Por proteccion --}}
        <label for="">Fecha:</label>
        <input type="text" name="date"><br><br>
        <label for="">Precio:</label>
        <input type="number" name="price"><br><br>
        <label for="">Nombre del tren</label>
        <select name="ticket_type_id">
            @foreach ($trains as $train)
                <option value={{ $train->id }}>
                    {{ $train->name }}
                </option>
            @endforeach
        </select><br><br>


        <label for="">Tipo de Billete</label>
        <select name="ticket_type_id">
            @foreach ($ticket_types as $ticket_type)
                <option value={{ $ticket_type->id }}>
                    {{ $ticket_type->type }}
                </option>
            @endforeach
        </select>
        <input type="submit" value="Crear">
    </form>
</body>

</html>
