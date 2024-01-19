<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;
use App\Models\TicketType;
use App\Models\Train;
use Illuminate\Support\Facades\DB;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tickets = Ticket::all();
        return view('ticket/index', [
            'tickets' => $tickets
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $trains = Train::all();
        $ticket_types = TicketType::all();
        return view('ticket/create', [
            'ticket_types' => $ticket_types,
            'trains' => $trains
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ticket = new Ticket;
        $ticket->name = $request->input('date');
        $ticket->passengers = $request->input('price');
        $ticket->year = $request->input('train_id');
        $ticket->ticket_type_id = $request->input('ticket_type_id');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    { {
            $ticket = Ticket::find($id);

            return view('ticket/show', ['ticket' => $ticket]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $trains = Train::all();
        $ticket_types = TicketType::all();
        $ticket = Ticket::find($id);
        return view('ticket/edit', [
            'ticket_types' => $ticket_types,
            'ticket' => $ticket,
            'trains' => $trains
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $ticket = Ticket::find($id);

        $ticket->id = $id;
        $ticket->date = $request->input('date');
        $ticket->price = $request->input('price');
        $ticket->train_id = $request->input('train_id');
        $ticket->ticket_type_id = $request->input('ticket_type_id');

        $ticket->update(); //inserta este objeto en la base de datos, como un insert
        return redirect('/ticket');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('tickets')->where('id', "=", $id)->delete();
        return redirect('/ticket'); /* La carpeta del index */
    }
}
