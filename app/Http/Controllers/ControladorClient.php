<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ControladorClient extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dades_clients = Client::all();
        return view('llista-clients', compact('dades_clients'));
    }

    public function index_basic(){
        $dades_clients = Client::all();
        return view('llista-basica', compact('dades_clients'));
    }
    
    public function create()
    {
        return view('crear-client');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $nouClient = $request->validate([
        'Passaport_client' => 'required|unique:clients',
        'Nom' => 'required',
        'Edat' => 'required',
        'Telèfon' => 'required',
        'Adreça' => 'required',
        'Ciutat' => 'required',
        'País' => 'required',
        'Email' => 'required',
        'Tipus_targeta' => 'required',
        'Número_targeta' => 'required',
    ]);

    $client = Client::create($nouClient);

    return redirect('clients');
}


    /**
     * Display the specified resource.
     */
    public function show($Passaport_client)
    {
        $dades_client = Client::findOrFail($Passaport_client);
        return view('mostra', compact('dades_client'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    
    public function edit($Passaport_client)
    {
        $dades_client = Client::findOrFail($Passaport_client);
        return view('actualitza', compact('dades_client'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $Passaport_client)
    {
        // Validar los datos del formulario
        $noves_dades_client = $request->validate([
            'Passaport_client' => 'required|unique:clients,Passaport_client,'.$Passaport_client.',Passaport_client',
            'Nom' => 'required',
            'Edat' => 'required',
            'Telèfon' => 'required',
            'Adreça' => 'required',
            'Ciutat' => 'required',
            'País' => 'required',
            'Email' => 'required',
            'Tipus_targeta' => 'required',
            'Número_targeta' => 'required',
        ]);
    
        Client::findOrFail($Passaport_client)->update($noves_dades_client);
    
        return redirect('clients');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( Request $request, $Passaport_client)
    {
        $client = Client::findOrFail($Passaport_client)->delete();
        return redirect('clients');
    }

    public function esborraTot()
{
    Client::truncate();
    return view('esborrat');
}

}