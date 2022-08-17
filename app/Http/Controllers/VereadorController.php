<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vereador;

class VereadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vereadores = Vereador::all();
        return view('vereadores', ['vereadores' => $vereadores]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('componentes.form_cad_vereador');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Vereador::create($request->all());

        return redirect()->route('vereador.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Vereador $vereador)
    {
        return view('componentes.form_edit_vereador', ['vereador' => $vereador]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vereador $vereador)
    {
        $vereador->update($request->all());
        return redirect()->route('vereador.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vereador $vereador)
    {
        $vereador->delete();
        return redirect()->route('vereador.index');
    }
}
