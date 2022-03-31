@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cadastrar Material</div>

                <div class="card-body">
                    <form method="POST" action="{{route('material.store')}}">
                        @csrf
                        <div class="row mb-3">
                            <label for="descricao" class="col-md-4 col-form-label text-md-end">Descrição</label>
                            <div class="col-md-6">
                                <input id="descricao" type="text" class="form-control" name="descricao" value="{{ old('descricao') }}" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="valor" class="col-md-4 col-form-label text-md-end">Valor</label>
                            <div class="col-md-6">
                                <input id="valor" type="float" class="form-control" name="valor" value="{{ old('valor') }}" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="fornecedor" class="col-md-4 col-form-label text-md-end">Fornecedor</label>
                            <div class="col-md-6">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Fornecedores</option>
                                    <option value="1">Fornecedor 1</option>
                                    <option value="2">Fornecedor 2</option>
                                    <option value="3">Fornecedor 3</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">Cadastrar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection