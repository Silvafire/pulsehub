<div class="form-group">
    <label for="inputImage">Imagem</label>
    <input type="file" class="form-control-file" name="imagem" id="inputImage" aria-describedby="fileHelp" />
    <small id="fileHelp" class="form-text text-muted">Por favor carregue um ficheiro de imagem válido. O tamanho da imagem não deve exceder 2MB.</small>
</div>

<div class="form-group">
    <label for="inputTitle">Título</label>
    <input type="text" class="form-control" name="titulo" id="inputTitle" value="{{ old('titulo', $post->titulo) }}" />
</div>

<div class="form-group">
    <label for="inputDescription">Descricao</label>
    <input type="text" class="form-control" name="descricao" id="descricao" value="{{old('descricao',$post->descricao)}}" />
</div>

<div class="form-group">
    <label for="inputDescription">Informacao</label>
    <input type="text" class="form-control" name="informacao" id="informacao" value="{{old('informacao',$post->informacao)}}" />

</div>
