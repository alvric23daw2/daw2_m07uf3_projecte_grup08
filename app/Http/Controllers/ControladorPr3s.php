<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pr3s;

class ControladorPr3s extends Controller
{
    /**
     * Muestra una lista de los registros de pr3s.
     */
    public function index()
    {
        $pr3s = Pr3s::all();
        return view('dashboard', compact('pr3s'));
    }

    /**
     * Muestra el formulario para crear un nuevo registro de pr3s.
     */
    public function create()
    {
        return view('crear-pr3s');
    }
    
    /**
     * Almacena un nuevo registro de pr3s en la base de datos.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string',
            'cognoms' => 'required|string',
            'correu' => 'required|email',
        ]);

        Pr3s::create($request->all());

        return redirect()->route('pr3s.index')->with('success', 'Registre de pr3s creat correctament.');
    }

    // Aquí irían los demás métodos del controlador, como show, edit, update y destroy
}
