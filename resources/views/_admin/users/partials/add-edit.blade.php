<div class="form-group">
    <label for="inputFullname">Nome</label>
    <input type="text" class="form-control" name="name" id="inputFullname" value=""/>
</div>

<div class="form-group">
    <label for="inputEmail">E-mail</label>
    <input type="text" class="form-control" name="email" id="inputEmail" placeholder="exemplo@gmail.com"
        value="" />
</div>

<div class="form-group">
    <label for="inputPassword">Password</label>
    <input type="password" class="form-control" name="password" id="inputPassword" placeholder="Enter your password" value="" />
</div>

<div class="form-group">
    <label for="inputAge">Idade</label>
    <input type="number" class="form-control" name="age" id="inputAge" placeholder="Enter your age" value="" />
</div>

<div class="form-group">
    <label for="inputPhoto">Foto</label>
    <input type="file" class="form-control-file" name="photo" id="inputPhoto" aria-describedby="fileHelp" />
    <small id="fileHelp" class="form-text text-muted"> Por favor carregue um ficheiro de imagem válido. O tamanho da imagem não deve exceder 2MB. </small>
</div>

<div class="form-group">
    <label for="inputRole">Previlégios</label>
    <select name="role" id="inputRole" class="form-control">
        <option value="A">Administrador</option>
        <option value="N" selected>Normal</option>
    </select>
</div>
