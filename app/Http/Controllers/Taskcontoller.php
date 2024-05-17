<?php

namespace App\Http\Controllers;

use App\Models\task;
use Illuminate\Http\Request;

class Taskcontoller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $Tasks=task::all();
        
        return view('index', compact('Tasks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
        $data=$request->all();
        $task= new task;
        $task->titre = $request->get('title');
        $task->description = $request->get('description');
        $task->details=$request->get('details');
        $task->save();

        return redirect()->route('index')->with('success','enregistrement effectue avec succes');
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
        $Task=task::FindOrFail($id);
      return view('edit', compact('Task'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $Task=task::Find($request->id);
        $Task->titre=$request->get('title');
        $Task->description=$request->get('description');
        $Task->details=$request->get('details');
        $Task->update();

        return redirect()->route('index')->with('success', 'tache modifiee avec succes');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Tasks=task::FindOrFail($id);

        $Tasks->delete();

        return redirect()->route('index')->with('succes','taches supprimmee avec succes');
    }
}
