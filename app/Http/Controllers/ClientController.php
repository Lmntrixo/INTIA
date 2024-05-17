<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */


     public function accueil()
     {
        return view('accueil');
     }

    public function index()//afficher les informations du clients
    {
        $Clients = Client::all();
        return view('index', compact('Clients'));
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
        $client=new Client;
        $client->name=$request->get('name');
        $client->surname= $request->get('surname');
        $client->ville=$request->get('ville');
        $client->status=$request->get('status');
        $client->montant_assurance=$request->get('montant_assurance');
        $client->save();
        return redirect()->route('index')->with('success','enregistrement reussi');
    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client, string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client, String $id)
    {
        $Clients=Client::findOrFail($id);
        return view('edit',compact('Clients'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Client $client , string $id)
    {
        $Client= Client::find($request->id);
        $Client->name = $request->get('name');
        $Client->surname= $request->get('surname');
        $Client->ville=$request->get('ville');
        $Client->status=$request->get('status');
        $Client->montant_assurance= $request->get('montant_assurance');
        $Client->update();
        return redirect()->route('index')->with('success', 'informations mis a jour');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client, string  $id)
    {
        $clients= Client::FindOrFail($id);
        $clients->delete();
        return redirect()->route('index')->with('success', 'informations supprimmee' );
    }
}
