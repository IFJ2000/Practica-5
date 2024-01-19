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
                <th>Tipo de tren</th>

            </tr>

        </thead>

        <tbody>
            @foreach ($train_types as $train_type)
                <tr>
                    <td>{{ $train_type->type }}</td>
                    <td>{{ $train_type->price }}</td>
                    <td>{{ $train_type->train_id }}</td>
                    <td>{{ $train_type->ticket_type_id }}</td>




                </tr>
            @endforeach
    </table>
</body>
</html>