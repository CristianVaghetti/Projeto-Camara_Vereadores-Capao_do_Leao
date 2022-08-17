@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editar Fornecedor</div>

                <div class="card-body">
                    <form method="POST" action="{{route('fornecedor.update', ['fornecedor' => $fornecedor->id])}}">
                        @csrf
                        @method('PUT')
                        <div class="row mb-3">
                            <label for="nome" class="col-md-4 col-form-label text-md-end">Nome</label>
                            <div class="col-md-6">
                                <input id="nome" type="text" class="form-control" name="nome" value="{{ $fornecedor->nome ?? old('nome') }}" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="CNPJ" class="col-md-4 col-form-label text-md-end">CNPJ</label>
                            <div class="col-md-6">
                                <input id="CNPJ" type="integer" class="form-control" name="CNPJ" value="{{ $fornecedor->CNPJ ?? old('CNPJ') }}">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">Editar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection