<?php

namespace App\Http\Controllers;

use App\Models\Fornecedor;
use App\Models\Material;
use App\Models\TipoMaterial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\VarDumper\VarDumper;

class MaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $flag = isset($request->flag) ? $request->flag : 'nada';
        $materiais = Material::all();
        $fornecedores = Fornecedor::all();
        $tiposMateriais = TipoMaterial::all();
        return view('materiais', ['flag' => $flag, 'materiais' => $materiais, 'fornecedores' => $fornecedores, 'tiposMateriais' => $tiposMateriais]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     $fornecedores = Fornecedor::all();
    //     $tiposMateriais = TipoMaterial::all();
    //     $materiais = Material::all();
    //     return view('componentes.form_cad_material', ['fornecedores' => $fornecedores, 'tiposMateriais' => $tiposMateriais, 'materiais' => $materiais]);
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Material::create($request->all());
        return redirect()->route('material.index');
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
