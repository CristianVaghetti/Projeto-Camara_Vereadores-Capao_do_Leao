@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cadastrar Vereador</div>

                <div class="card-body">
                    <form method="POST" action="{{route('vereador.store')}}">
                        @csrf
                        <div class="row mb-3">
                            <label for="nome" class="col-md-4 col-form-label text-md-end">Nome</label>
                            <div class="col-md-6">
                                <input id="nome" type="text" class="form-control" name="nome" value="{{ old('nome') }}" required autocomplete="nome" autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="matricula" class="col-md-4 col-form-label text-md-end">Matrícula</label>
                            <div class="col-md-6">
                                <input id="matricula" type="integer" class="form-control @error('matricula') is-invalid @enderror" name="matricula" value="{{ old('matricula') }}" required autocomplete="matricula" autofocus>
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