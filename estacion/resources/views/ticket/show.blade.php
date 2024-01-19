<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ver Serie</title>
</head>

<body>
    <p>Fecha: {{ $ticket->date }}</p>
    <p>Precio: {{ $ticket->price }}</p>
    <p>Nombre del tren: {{ $ticket->trains->name }}</p>
    <p>Tipo de Ticket:{{ $ticket->ticket_types->type }}</p>

</body>

</html>
