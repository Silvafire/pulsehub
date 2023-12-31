<div class="form-group">
    <label for="inputName">Nome</label>
    <input type="text" class="form-control" name="nome" id="inputName" value="{{old('nome',$tiposplano->nome)}}" />
</div>

<div class="form-group">
    <label for="inputDescription">Descrição</label>
    <textarea class="form-control" name="descricao" id="inputDescription">{{old('descricao', $tiposplano->descricao)}}</textarea>
</div>

<div class="form-group">
    <label for="inputImage">Imagem</label><br>
    <img height='80' style="margin-bottom:1rem" src="{{asset('storage/tiposplanos_imagens/'. $tiposplano->imagem )}}" alt="Imagem do tipop">
    <input type="file" class="form-control-file" name="imagem" id="inputImage" aria-describedby="fileHelp" />
    <small id="fileHelp" class="form-text text-muted"> Por favor carregue um ficheiro de imagem válido. O tamanho da imagem não deve exceder 2MB. </small>
</div>


