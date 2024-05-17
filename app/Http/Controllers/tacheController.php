<?php

namespace App\Http\Controllers;

use App\Models\tache;
use Illuminate\Http\Request;

class tacheController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $taches=tache::all();

        return view('affiche', compact('taches'));
    }  

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {


        return view('formulaire');


    }

    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->all();
        $task= new tache();
        $task->name=$request->get('titre');
        //$task->description=$request->get('description');
        //$task->auteur=$request->get('auteur');
       // $task->date_publication=$request->get('date_publication');
        $task->save();

        return redirect()->route('index')->with('success', 'enregistrement reussi');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
