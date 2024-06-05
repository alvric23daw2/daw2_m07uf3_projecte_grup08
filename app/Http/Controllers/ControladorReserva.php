<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reserva;
use App\Models\Client;
use App\Models\Vols;

class ControladorReserva extends Controller
{
    /**
     * Muestra una lista de los registros de alquiler.
     */
    public function index()
    {
        $dades_reserva = Reserva::all();
        return view('llista-reserva', compact('dades_reserva'));
    }

    /**
     * Muestra el formulario para crear un nuevo registro de alquiler.
     */
    public function create()
    {
        $clients = Client::all();
        $options_passaport = $clients->pluck('Passaport_client', 'Passaport_client')->toArray();
        $vols = Vols::all();
        return view('crear-reserva', compact('clients', 'options_passaport', 'vols'));
    }
    

    /**
     * Almacena un nuevo registro de alquiler en la base de datos.
     */
    public function store(Request $request)
{
    $nouReserva = $request->validate([
        'Passaport_client' => 'required',
        'Codi_vol' => 'required',
        'Localitzador' => 'required',
        'Num_seient' => 'required',
        'Equipatge_ma' => 'required',
        'Equipatge_cabina_fins_20kg' => 'required',
        'Quantitat_equipatge_mes_20kg' => 'required',
        'Tipus_checking' => 'required',
        'Preu_vol' => 'required',
        'Tipus_assegurança' => 'required',


    ]);

    $reserva = Reserva::create($nouReserva);

    return redirect('reserva');
}


    /**
     * Muestra los detalles de un registro de alquiler específico.
     */
    public function show(string $Passaport_client, string $Codi_vol)
{
    $dades_reserva = Reserva::where('Passaport_client', $Passaport_client)->where('Codi_vol', $Codi_vol)->firstOrFail();
    $dades_vols = Vols::where('Codi_vol', $Codi_vol)->firstOrFail();
    $dades_client = Client::where('Passaport_client', $Passaport_client)->firstOrFail();

    return view('mostra-reserva', compact('dades_reserva', 'dades_vols', 'dades_client'));
}

    /**
     * Muestra el formulario para editar un registro de alquiler.
     */
    public function edit($Passaport_client, $Codi_vol)
{
    $dades_reserva = Reserva::where('Passaport_client', $Passaport_client)->where('Codi_vol', $Codi_vol)->first();
    $dades_clients = Client::all();
    $dades_vols = Vols::all();

    return view('actualitza-reserva', compact('dades_reserva', 'dades_clients', 'dades_vols'));
}

    /**
     * Actualiza un registro de alquiler específico en la base de datos.
     */
    public function update(Request $request, $id)
    {
        $noves_dades_reserva = $request->validate([
            'Passaport_client' => 'required|string|exists:clients,Passaport_client',
            'Codi_vol' => 'required|string|exists:vols,Codi_vol',
            'Localitzador' => 'required',
            'Num_seient' => 'required',
            'Equipatge_ma' => 'required',
            'Equipatge_cabina_fins_20kg' => 'required',
            'Quantitat_equipatge_mes_20kg' => 'required',
            'Tipus_assegurança' => 'required',
            'Preu_vol' => 'required',
            'Tipus_checking' => 'required',
        ]);

        Reserva::where('Passaport_client', $request->Passaport_client)
                    ->where('Codi_vol', $request->Codi_vol)
                    ->update($noves_dades_reserva);

        return redirect()->route('reserva.index')->with('success', 'Registre de reserva actualitzat.');
    }

    /**
     * Elimina un registro de alquiler específico de la base de datos.
     */
    public function destroy(string $Codi_vol)
    {
        $reserva = Reserva::findOrFail($Codi_vol)->delete();
        return redirect()->route('reserva.index')->with('success', 'Registre de Reserva eliminat.');
    }
}
