<div class="form-group">
    <label for="inputName">Nome</label>
    <input type="text" class="form-control" name="nome" id="inputName" value="{{old('nome',$service->nome)}}" />
</div>

<div class="form-group">
    <label for="inputDescription">Descrição</label>
    <input type="text" class="form-control" name="descricao" id="inputDescription" value="{{old('descricao',$service->descricao)}}"></input>
</div>