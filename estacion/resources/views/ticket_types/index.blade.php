<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Tipo de billete</th>

            </tr>

        </thead>

        <tbody>
            @foreach ($ticket_types as $ticket_type)
                <tr>
                    <td>{{ $ticket_type->type }}</td>
                    <td>{{ $ticket_type->price }}</td>
                    <td>{{ $ticket_type->train_id }}</td>
                    <td>{{ $ticket_type->ticket_type_id }}</td>




                </tr>
            @endforeach
    </table>
</body>
</html>