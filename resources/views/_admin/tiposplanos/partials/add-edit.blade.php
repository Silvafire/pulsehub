<div class="form-group">
    <label for="inputName">Nome</label>
    <input type="text" class="form-control" name="nome" id="inputName" value="{{old('nome',$tiposplano->nome)}}" />
</div>

<div class="form-group">
    <label for="inputDescription">Descrição</label>
    <textarea class="form-control" name="descricao" id="inputDescription">{{old('descricao', $tiposplano->descricao)}}</textarea>
</div>

<div class="form-group">
    <label for="inputClasse">Classe</label>
    <select class="form-control" name="classe" id="inputClasse" required>
        <option value="normal" {{ old('classe', $tiposplano->classe) == 'normal' ? 'selected' : '' }}>Normal</option>
        <option value="atleta" {{ old('classe', $tiposplano->classe) == 'atleta' ? 'selected' : '' }}>Atleta</option>
    </select>
</div>

<div class="form-group">
    <label for="inputImage">Imagem</label><br>
    
    <input type="file" class="form-control-file" name="imagem" id="inputImage" aria-describedby="fileHelp" />
    <small id="fileHelp" class="form-text text-muted"> Por favor carregue um ficheiro de imagem válido. O tamanho da imagem não deve exceder 2MB. </small>
</div>


