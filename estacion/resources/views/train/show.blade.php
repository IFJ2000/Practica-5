<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ver Serie</title>
</head>

<body>
    <p>Nombre: {{ $train->name }}</p>
    <p>Pasajeros: {{ $train->passengers }}</p>
    <p>Año: {{ $train->year }}</p>
    <p>Tipo de tren:{{$train->train_types->type}}</p>
    <ul>
         @php
         
            $tickets = $train->tickets;

        @endphp
        @if ($tickets !== null)
        
            @foreach ($tickets as $ticket)
                <li>{{ $ticket->type }}</li>
    
             @endforeach 
        
            
        @else
           {{ "No hay tickets asociados a este tren" }} 
        
        @endif 
        
        
    </ul>
</body>

</html>