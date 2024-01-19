<?php

namespace App\Http\Controllers;

use App\Models\Train;
use App\Models\TrainType;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TrainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trains = Train::all();
        return view('train/index', [
            'trains' => $trains
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $train_types = TrainType::all();
        return view('train/create', [
            'train_types' => $train_types
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $train = new Train;
        $train->name = $request->input('name');
        $train->passengers = $request->input('passengers');
        $train->year = $request->input('year');
        $train->train_type_id = $request->input('train_type_id');  //******hay que mostrar el nombre del tipo no el ID */

        $train->save(); //inserta este objeto en la base de datos, como un insert
        return redirect('/train');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $train = Train::find($id);
        //echo $id;
        //echo $train;
        return view('train/show', ['train' => $train]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $train_types = TrainType::all();
        $train = Train::find($id);
        return view('train/edit', [
            'train_types' => $train_types,
            'train' => $train
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $train = Train::find($id);
        echo $train;
         $train->id = $id;
        $train->name = $request->input('name');
        $train->passengers = $request->input('passengers');
        $train->year = $request->input('year');
        $train->train_type_id = $request->input('train_type_id');   

        $train->update(); //inserta este objeto en la base de datos, como un insert
        return redirect('/train');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('trains')->where('id', "=", $id)->delete();
        return redirect('/train'); /* La carpeta del index */
    }
}
