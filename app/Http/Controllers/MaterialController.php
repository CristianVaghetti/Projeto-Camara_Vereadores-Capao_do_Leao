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
    public function index(Request $request)
    {
        $flag = isset($request->flag) ? $request->flag : 'nada';
        $materiais = Material::all();
        $fornecedores = Fornecedor::all();
        $tiposMateriais = TipoMaterial::all();
        return view('materiais', ['flag' => $flag, 'materiais' => $materiais, 'fornecedores' => $fornecedores, 'tiposMateriais' => $tiposMateriais]);
    }

    public function create()
    {
       //
    }

    public function store(Request $request)
    {
        Material::create($request->all());
        return redirect()->route('material.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request)
    {
        $material = Material::find($request->id);
        $material->quantidade += $request->quantidade;
        $material->save();
        return redirect()->route('material.index');
    }

    public function destroy($id)
    {
        //
    }
}
