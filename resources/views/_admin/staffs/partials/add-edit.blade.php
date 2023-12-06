<div class="form-group">
    <label for="inputName">Nome</label>
    <input type="text" class="form-control" name="nome" id="inputName" value="{{old('nome',$staff->nome)}}" />
</div>

<div class="form-group">
    <label for="inputDescription">Descrição</label>
    <textarea class="form-control" name="descricao" id="inputDescription">{{ old('descricao', $staff->descricao) }}</textarea>
</div>

<div class="form-group">
    <label for="inputImage">Imagem</label>
    <input type="file" class="form-control-file" name="imagem" id="inputImage" aria-describedby="fileHelp" />
    <small id="fileHelp" class="form-text text-muted"> Por favor carregue um ficheiro de imagem válido. O tamanho da imagem não deve exceder 2MB. </small>
</div>


<div class="form-group">
    <label for="inputTipo">Tipo</label>
    <select class="form-control" name="tipo_eventos_mod_id" id="inputTipo">
        @foreach($tipos as $tipo)
            <option value="{{$tipo->id}}" {{$tipo->id==old('tipo_eventos_mod_id',$staff->tipo_eventos_mod_id)?"selected":""}}>{{$tipo->nome}}</option>
        @endforeach
    </select>
</div>
