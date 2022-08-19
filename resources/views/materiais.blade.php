@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-10">
                            <h2>Materiais</h2>
                        </div>
                        <div class="col-2"><a href="{{route('material.create')}}"><button type="button" class="btn btn-success">Adicionar</button></a></div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col" class="col-1">ID</th>
                                <th scope="col" class="col-1">Descrição</th>
                                <th scope="col" class="col-2">Valor</th>
                                <th scope="col" class="col-2">Quantidade</th>
                                <th scope="col" class="col-1"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($materiais as $material)
                            <tr>
                                <th scope="row" class="col-1">{{$material->id}}</th>
                                <td class="col-2">{{$material->descricao}}</td>
                                <td class="col-7">{{$material->valor}}</td>
                                <td class="col-7">{{$material->quantidade}}</td>
                                <td class="col-1"><a href="{{route('material.edit', ['material' => $material->id])}}"><button type="button" class="btn btn-primary">Usar</button></a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection