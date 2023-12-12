<!--<div class="form-group">
    <label for="inputImage">Imagem</label>
    <input type="file" class="form-control-file" name="imagem" id="inputImage" aria-describedby="fileHelp" />
    <small id="fileHelp" class="form-text text-muted">Por favor carregue um ficheiro de imagem válido. O tamanho da imagem não deve exceder 2MB.</small>
</div>-->

<div class="form-group">
    <label for="inputImage">Imagem</label>
    <br>
    <img height='80' style="margin-bottom:1rem" src="{{asset('storage/post_imagens/'. $post->imagem )}}" alt="Imagem do Post">
    <input type="file" class="form-control-file" name="imagem" id="inputImage" aria-describedby="fileHelp" />
    <small id="fileHelp" class="form-text text-muted"> Por favor carregue um ficheiro de imagem válido. O tamanho da imagem não deve exceder 2MB. </small>
</div>

<div class="form-group">
    <label for="inputTitle">Título</label>
    <input type="text" class="form-control" name="titulo" id="inputTitle" value="{{ old('titulo', $post->titulo) }}" />
</div>

<div class="form-group">
    <label for="inputDescription">Descrição</label>
    <input type="text" class="form-control" name="descricao" id="descricao" value="{{old('descricao',$post->descricao)}}" />
</div>

<div class="form-group">
    <label for="inputDescription">Informação</label>
    <input type="text" class="form-control" name="informacao" id="informacao" value="{{old('informacao',$post->informacao)}}" />

</div>

<div class="form-group">
    <label for="inputTipoPost">Tipo de Post</label>
    <select class="form-control" name="tipo_post_id" id="inputTipoPost" required>
        <option value="" disabled selected>Indique o tipo do post.</option>
        @foreach($tipoPost as $tipopost)
            <option value="{{$tipopost->id}}" {{$tipopost->id==old('tipo_post_id',$post->tipo_post_id)?"selected":""}}>{{$tipopost->nome}}</option>
        @endforeach
    </select>
</div>


