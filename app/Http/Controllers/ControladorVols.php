<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vols;
use Illuminate\Database\Eloquent\Model;

class ControladorVols extends Controller
{
    protected $primaryKey = 'tid';
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dades_vols = Vols::all();
        return view('llista-vols', compact('dades_vols'));
    }

    public function index_basic(){
        $dades_vols = Vols::all();
        return view('llista-basica', compact('dades_vols'));
    }
    
    public function create()
    {
        return view('crear-vols');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){
        $nouVol = $request->validate([
            'Codi_vol' => 'required',
            'Codi_model' => 'required',
            'Ciutat_origen' => 'required',
            'Ciutat_desti' => 'required',
            'Termina_origen' => 'required',
            'Terminal_desti' => 'required',
            'Data_sortida' => 'required',
            'Data_arribada' => 'required',
            'Hora_sortida' => 'required',
            'Hora_arribada' => 'required',
            'Classe' => 'required',
        ]);

        $vol = Vols::create($nouVol);

        return redirect('vols');
    }

    /**
     * Display the specified resource.
     */
    public function show($Codi_vol)
    {
        $dades_vols = Vols::findOrFail($Codi_vol);
        return view('mostra-vols', compact('dades_vols'));
    }

    public function show_basic($Codi_vol)
    {
        $dades_vols = Vols::findOrFail($Codi_vol);
        return view('mostra-basica', compact('dades_vols'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    
    public function edit($Codi_vol)
    {
        $dades_vols = Vols::findOrFail($Codi_vol);
        return view('actualitza-vols', compact('dades_vols'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $Codi_vol)
    {
        $noves_dades_vols = $request->validate([
            'Codi_vol' => 'required',
            'Codi_model' => 'required',
            'Ciutat_origen' => 'required',
            'Ciutat_desti' => 'required',
            'Termina_origen' => 'required',
            'Terminal_desti' => 'required',
            'Data_sortida' => 'required',
            'Data_arribada' => 'required',
            'Hora_sortida' => 'required',
            'Hora_arribada' => 'required',
            'Classe' => 'required',
        ]);

        Vols::findOrFail($Codi_vol)->update($noves_dades_vols);

        return redirect('vols');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($Codi_vol)
    {
        $Vols = Vols::findOrFail($Codi_vol)->delete();
        return redirect('vols');
    }
}
