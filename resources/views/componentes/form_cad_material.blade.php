<div class="col-md-4">
    <div class="card">
        <div class="card-header">
        <div class="row">
                <div class="col-8">
                    <h2>Cadastrar</h2>
                </div>
            </div>
        </div>

        <div class="card-body">
            <form method="POST" action="{{route('material.store')}}">
                @csrf
                <div class="row mb-3">
                    <label for="descricao" class="col-md-4 col-form-label text-md-end">Descrição</label>
                    <div class="col-md-7">
                        <input id="descricao" type="string" class="form-control" name="descricao" value="{{ old('descricao') }}" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="valor" class="col-md-4 col-form-label text-md-end">Valor</label>
                    <div class="col-md-4">
                        <input id="valor" type="float" class="form-control" name="valor" value="{{ old('valor') }}" placeholder="R$ " required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="quantidade" class="col-md-4 col-form-label text-md-end">Quantidade</label>
                    <div class="col-md-3">
                        <input id="quantidade" type="int" class="form-control" name="quantidade" value="{{ old('quantidade') }}" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="fornecedor_id" class="col-md-4 col-form-label text-md-end">Fornecedor</label>
                    <div class="col-md-6">
                        <select class="form-select" aria-label="Default select example" name="fornecedor_id" id="fornecedor_id">
                            <option selected>Fornecedor</option>
                            @foreach($fornecedores as $fornecedor)
                            <option value="{{$fornecedor->id}}">{{$fornecedor->nome}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="tipo_id" class="col-md-4 col-form-label text-md-end">Tipo</label>
                    <div class="col-md-6">
                        <select class="form-select" aria-label="Default select example" name="tipo_id" id="tipo_id">
                            <option selected>Tipo</option>
                            @foreach($tiposMateriais as $tipo)
                            <option value="{{$tipo->id}}">{{$tipo->descricao}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-success">Cadastrar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>