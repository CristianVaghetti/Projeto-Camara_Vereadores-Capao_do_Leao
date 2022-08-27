@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-8">
                            <h2>Materiais</h2>
                        </div>
                        <div class="col-2"><a href="{{route('material.index', ['flag' => 'Cadastrar'])}}"><button type="button" class="btn btn-success">Cadastrar</button></a></div>
                        <div class="col-2"><a href="{{route('material.index', ['flag' => 'Adicionar'])}}"><button type="button" class="btn btn-success">Adicionar</button></a></div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col" class="col-1">ID</th>
                                <th scope="col" class="col-3">Descrição</th>
                                <th scope="col" class="col-2">Valor</th>
                                <th scope="col" class="col-3">Fornecedor</th>
                                <th scope="col" class="col-1">Quantidade</th>
                                <th scope="col" class="col-1"></th>
                                <th scope="col" class="col-1"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($materiais as $material)
                            <tr>
                                <th scope="row" class="col-1">{{$material->id}}</th>
                                <td scope="row" class="col-2">{{$material->descricao}}</td>
                                <td scope="row" class="col-2">R$ {{$material->valor}}</td>
                                <td scope="row" class="col-4">{{$material->fornecedor_id}}</td>
                                <td scope="row" class="col-1">{{$material->quantidade}}</td>
                                <td scope="row" class="col-1"><a href="{{route('material.edit', ['material' => $material->id, 'flag' => 'usar'])}}"><button type="button" class="btn btn-danger">Usar</button></a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        @if($flag == 'Adicionar')
            @include('componentes.form_add_material', ['materiais' => $materiais])
        @endif
        @if($flag == 'Cadastrar')
            @include('componentes.form_cad_material', ['fornecedores' => $fornecedores, 'tiposMateriais' => $tiposMateriais, 'materiais' => $materiais])
        @endif
    </div>
</div>
@endsection