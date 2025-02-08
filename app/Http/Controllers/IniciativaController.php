<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreIniciativaRequest;
use App\Http\Requests\UpdateIniciativaRequest;
use App\Models\Iniciativa;
use App\Models\Ordenador;


class IniciativaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $iniciativas=Iniciativa::all();
        return view('iniciativa.index', compact('iniciativas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $ordenadores=Ordenador::all();
        return view('iniciativa.form_create', compact('ordenadores'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreIniciativaRequest $request)
    {
        $iniciativa=new Iniciativa;
        $iniciativa=$request->validated();
        Iniciativa::create($iniciativa);
        return redirect()->route('iniciativa.index')->with('success', 'Iniciativa guardada correctamente');

    }

    /**
     * Display the specified resource.
     */
    public function show(Iniciativa $iniciativa)
    {
        $ordenador=Ordenador::where('id', $iniciativa->ordenador_id)->first();
        return view('iniciativa.form_show', compact('iniciativa', 'ordenador'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Iniciativa $iniciativa)
    {
        $ordenadores=Ordenador::all();
        $ordenador_original=Ordenador::where('id', $iniciativa->ordenador_id)->first();
        return view('iniciativa.form_update', compact('iniciativa', 'ordenadores', 'ordenador_original'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateIniciativaRequest $request, Iniciativa $iniciativa)
    {
        $iniciativaModificada=new Iniciativa;
        $iniciativaModificada=$request->validated();
        $iniciativa->update($iniciativaModificada);
        return redirect()->route('iniciativa.index')->with('success', 'Iniciativa cambiada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Iniciativa $iniciativa)
    {
        try{
            $iniciativa->delete();
            return redirect()->route('iniciativa.index')->with('success', 'Iniciativa eliminada correctamente');
            }catch(\Exception $e){
                return redirect()->route('iniciativa.index')->with('error', 'La iniciativa no se puede eliminar porque tiene referencias en otras tablas.');
    
            }
    }
}
