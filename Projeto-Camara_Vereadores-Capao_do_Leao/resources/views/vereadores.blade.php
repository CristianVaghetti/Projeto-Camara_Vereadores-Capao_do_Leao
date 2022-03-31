@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-10"><h2>Vereadores</h2></div>
                        <div class="col-2"><a href="{{route('vereador.create')}}"><button type="button" class="btn btn-success">Cadastrar</button></a></div>
                    </div>
                </div>



                <div class="card-body">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col" class="col-1">ID</th>
                                <th scope="col" class="col-2">Matrícula</th>
                                <th scope="col" class="col-7">Nome</th>
                                <th scope="col" class="col-1"></th>
                                <th scope="col" class="col-1"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($vereadores as $vereador)
                            <tr>
                                <th scope="row" class="col-1">{{$vereador->id}}</th>
                                <td class="col-2">{{$vereador->matricula}}</td>
                                <td class="col-7">{{$vereador->nome}}</td>
                                <td class="col-1"><a href="{{route('vereador.edit', ['vereador' => $vereador->id])}}"><button type="button" class="btn btn-primary">Editar</button></a></td>
                                <td class="col-1">
                                    <form method="POST" action="{{route('vereador.destroy', ['vereador' => $vereador->id])}}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Excluir</button>
                                    </form>
                                </td>
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