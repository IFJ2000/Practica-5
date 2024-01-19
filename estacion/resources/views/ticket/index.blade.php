<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>
        <a href="{{ route('ticket.create') }}">Nuevo ticket</a>
    </p>
    <table>
        <thead>
            <tr>
                <th>Fecha</th>
                <th>Precio</th>
                <th>Nombre del tren</th>
                <th>Nombre del ticket</th>

            </tr>

        </thead>

        <tbody>
            @foreach ($tickets as $ticket)
                <tr>
                    <td>{{ $ticket->date }}</td>
                    <td>{{ $ticket->price }}</td>
                    <td>{{ $ticket->trains->name }}</td>
                    <td>{{ $ticket->ticket_types->type }}</td>
                    <td>
                        <form action="{{ route('ticket.show', ['ticket' => $ticket->id]) }}" method="get">
                            {{-- Tengo dudas de los campos entre comillas  --}}
                            @csrf

                            <input type="submit" value="Ver">
                        </form>
                    </td>
                    <td>
                        <form action="{{ route('ticket.destroy', ['ticket' => $ticket->id]) }}" method="post">
                            @csrf

                            {{ method_field('DELETE') }}
                            <input type="submit" value="Borrar">
                        </form>
                    </td>
                    <td>
                        <form action="{{ route('ticket.edit', ['ticket' => $ticket->id]) }}" method="get">
                            {{-- Tengo dudas de los campos entre comillas  --}}
                            @csrf

                            <input type="submit" value="Editar">
                        </form>
                    </td>



                </tr>
            @endforeach
    </table>
</body>

</html>
