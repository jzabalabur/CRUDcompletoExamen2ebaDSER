<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOrdenadorRequest;
use App\Http\Requests\UpdateOrdenadorRequest;
use App\Models\Ordenador;

class OrdenadorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ordenadores=Ordenador::all();
        return view('ordenador.index', compact('ordenadores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ordenador.form_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOrdenadorRequest $request)
    {
        $ordenador=new Ordenador;
        $ordenador=$request->validated();
        Ordenador::create($ordenador);
        return redirect()->route('ordenador.index')->with('success', 'Ordenador guardado correctamente');

    }

    /**
     * Display the specified resource.
     */
    public function show(Ordenador $ordenador)
    {
        return view('ordenador.form_show', compact('ordenador'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ordenador $ordenador)
    {
        return view('ordenador.form_update', compact('ordenador'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrdenadorRequest $request, Ordenador $ordenador)
    {
        $ordenadorModificado=new Ordenador;
        $ordenadorModificado=$request->validated();
        $ordenador->update($ordenadorModificado);
        return redirect()->route('ordenador.index')->with('success', 'Ordenador cambiado correctamente');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ordenador $ordenador)
    {
        // $ordenador=Ordenador::find($id);
        try{
        $ordenador->delete();
        return redirect()->route('ordenador.index')->with('success', 'Ordenador eliminado correctamente');
        }catch(\Exception $e){
            return redirect()->route('ordenador.index')->with('error', 'El ordenador no se puede eliminar porque tiene referencias en otras tablas.');

        }
    }
}
