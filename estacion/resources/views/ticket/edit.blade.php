<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('ticket.update', ['ticket' => $ticket, 'id'=> $ticket->id]) }}" method="post">
        @csrf {{-- Por proteccion --}}
        {{ method_field('PUT') }}
        <label for="">Fecha:</label>
        <input type="text" name="date" value="{{$ticket -> date}}"><br><br>
        <label for="">Pasajeros</label>
        <input type="text" name="price" value="{{$ticket -> price}}"><br><br>
        <label for="">Nombre del tren</label>
        <select name="train_id">
            @foreach($trains as $train)
           <option value={{$train->id}}>
           {{$train->name}}
           </option>
           @endforeach 
         </select> 
       


        <label for=""> Nombre de Tipo de ticket</label>
        {{ $ticket}}
         <select name="train_type_id">
             @foreach($ticket_types as $ticket_type)
            <option value={{$ticket_type->id}}>
            {{$ticket_type->type}}
            </option>
            @endforeach 
          </select> 
        <input type="submit" value="Crear">
    </form>
</body>

</html>