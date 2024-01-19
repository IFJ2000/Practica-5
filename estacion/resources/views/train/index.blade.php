<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>
        <a href="{{ route('train.create') }}">Nuevo Tren</a>
    </p>
    <h1>Pagina principal de Trenes</h1>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Pasajeros</th>
                <th>Año del tren</th>
                <th>Nombre del tren</th>

            </tr>

        </thead>

        <tbody>
            @foreach ($trains as $train)
            {{$train->train_types->type}}
                <tr>
                    <td>{{ $train->name }}</td>
                    <td>{{ $train->passengers }}</td>
                    <td>{{ $train->year }}</td>
                    <td>{{ $train->train_types->type }}</td> 
                     <td>
                        <form action="{{ route('train.show', ['train' => $train->id]) }}" method="get">
                         {{-- Tengo dudas de los campos entre comillas  --}}
                        @csrf

                        <input type="submit" value="Ver">
                    </form>
                    </td>

                     <td>
                        <form action="{{ route('train.destroy', ['train' => $train->id]) }}" method="post">
                        @csrf
                        
                        {{ method_field('DELETE') }}
                        <input type="submit" value="Borrar">
                    </form>
                    </td>  

                    <td>
                        <form action="{{ route('train.edit', ['train' => $train->id]) }}" method="get">
                         {{-- Tengo dudas de los campos entre comillas  --}}
                        @csrf

                        <input type="submit" value="Editar">
                    </form>
                    </td>
                </tr>
            @endforeach
            <table>
</body>

</html>
