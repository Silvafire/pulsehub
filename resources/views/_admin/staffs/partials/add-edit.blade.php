<div class="form-group">
    <label for="inputName">Nome</label>
    <input type="text" class="form-control" name="nome" id="inputName" value="{{old('nome',$staff->nome)}}" />
</div>

<div class="form-group">
    <label for="inputDescription">Apelido</label>
    <textarea class="form-control" name="apelido" id="inputDescription">{{ old('apelido', $staff->apelido) }}</textarea>
</div>
<div class="form-group">
    <label for="inputName">especializacao</label>
    <input type="text" class="form-control" name="especializacao" id="especializacao" value="{{old('nome',$staff->especializacao)}}" />
</div>
<div class="form-group">
    <label for="inputName">Facebook</label>
    <input type="text" class="form-control" name="link_facebook" id="facebook" value="{{old('nome',$staff->facebook)}}" />
</div>
<div class="form-group">
    <label for="inputName">instagram</label>
    <input type="text" class="form-control" name="link_instagram" id="instagram" value="{{old('nome',$staff->instagram)}}" />
</div>
<div class="form-group">
    <label for="inputName">Email</label>
    <input type="text" class="form-control" name="link_email" id="email" value="{{old('nome',$staff->email)}}" />
</div>

<div class="form-group">
    <label for="inputImage">Imagem</label>
    <input type="file" class="form-control-file" name="img" id="inputImage" aria-describedby="fileHelp" />
    <small id="fileHelp" class="form-text text-muted"> Por favor carregue um ficheiro de imagem válido. O tamanho da imagem não deve exceder 2MB. </small>
</div> 



