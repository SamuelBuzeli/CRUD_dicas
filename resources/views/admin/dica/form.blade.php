<div class="form-row">
    <div class="form-group col-md-6 col-sm-12">
        <label for="type">Tipo: </label>
        <div>
            <input type="text" id="type" name="type" value="{{ isset($dica)? $dica->type: old('type') }}" class="form-control @error('type') is-invalid @enderror" placeholder="Insira o tipo do veículo" required>
            @error('type')
                <span class="invalid-feedback" role="alert">
                    <i class="fi-circle-cross"></i><strong> {{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group col-md-6 col-sm-12">
        <label for="brand">Marca: </label>
        <div>
            <input type="text" id="brand" name="brand" value="{{ isset($dica)? $dica->brand: old('brand') }}" class="form-control @error('brand') is-invalid @enderror" placeholder="Insira a marca do veículo" required>
            @error('type')
                <span class="invalid-feedback" role="alert">
                    <i class="fi-circle-cross"></i><strong> {{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group col-md-6 col-sm-12">
        <label for="model">Modelo: </label>
        <div>
            <input type="text" id="model" name="model" value="{{ isset($dica)? $dica->model: old('model') }}" class="form-control @error('model') is-invalid @enderror" placeholder="Insira o modelo do veículo" required>
            @error('type')
                <span class="invalid-feedback" role="alert">
                    <i class="fi-circle-cross"></i><strong> {{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group col-md-6 col-sm-12">
        <label for="version">Versão: </label>
        <div>
            <input type="text" id="version" name="version" value="{{ isset($dica)? $dica->version: old('version') }}" class="form-control @error('version') is-invalid @enderror" placeholder="Insira a versão do veículo (opcional)">
            @error('type')
                <span class="invalid-feedback" role="alert">
                    <i class="fi-circle-cross"></i><strong> {{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>


    <div class="form-group col-md-12 col-sm-12">
        <label for="tip">Dica</label>
        <div>
            <textarea id="tip" name="tip" class="form-control @error('tip') is-invalid @enderror" placeholder="Coloque aqui sua dica" required>{{ isset($dica)? $dica->tip: old('tip') }}</textarea>
            @error('tip')
                <span class="invalid-feedback" role="alert">
                    <i class="fi-circle-cross"></i><strong> {{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>



</div>