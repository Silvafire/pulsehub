<div class="form-group">
    <label for="inputFullname">Nome</label>
    <input type="text" class="form-control" name="name" id="inputFullname" value="{{ old('name', $user->name) }}" />
</div>

<div class="form-group">
    <label for="inputEmail">E-mail</label>
    <input type="text" class="form-control" name="email" id="inputEmail" placeholder="exemplo@gmail.com"
        value="{{ old('email', $user->email) }}" />
</div>

<div class="form-group">
    <label for="inputAge">Data de nascimento</label>
    <input type="date" class="form-control" name="data_nasc" id="inputAge" placeholder="Enter your age"
        value="{{ old('data_nasc', $user->data_nasc) }}" />
</div>

<div class="form-group">
    <label for="inputPhoto">Foto</label>
    <input type="file" class="form-control-file" name="img" id="inputPhoto" aria-describedby="fileHelp" />
    <small id="fileHelp" class="form-text text-muted"> Por favor carregue um ficheiro de imagem válido. O tamanho da
        imagem não deve exceder 2MB. </small>
</div>
@can('updateRole', $user)
    <div class="form-group">
        <label for="inputRole">Previlégios</label>
        <select name="perm" id="inputRole" class="form-control">
            <option value="A" {{ old('perm', $user->perm) == 'A' ? 'selected' : '' }}>Administrador</option>
            <option value="N" {{ old('perm', $user->perm) == 'N' ? 'selected' : '' }}>Normal</option>
        </select>
    </div>
@endcan
