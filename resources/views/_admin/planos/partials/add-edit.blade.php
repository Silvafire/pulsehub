<div class="form-group">
    <label for="inputName">Series</label>
    <input type="number" class="form-control" name="series" id="inputRepeticoes" min="1" value="{{old('series',$plano->series)}}" required>
</div>

<div class="form-group">
    <label for="inputDescription">Duração_Total</label>
    <input type="number" class="form-control" name="duracao_total" id="inputRepeticoes" min="1" value="{{old('duracao_total',$plano->duracao_total)}}" required>
</div>

<div class="form-group">
    <label for="inputDescription">Tmp_Exercicio</label>
    <input type="number" class="form-control" name="tmp_exercicio" id="Tmp_Exercicio" min="1" value="{{old('tmp_exercicio',$plano->tmp_exercicio)}}" required>
</div>

<div class="form-group">
    <label for="inputDescription">Repetições</label>
    <input type="number" class="form-control" name="repeticoes" id="inputRepeticoes" min="1" value="{{old('repeticoes',$plano->repeticoes)}}" required>
</div>

<div class="form-group">
    <label for="inputModalidade">Modalidade</label>
    <select class="form-control" name="modalidade_id" id="inputModalidade" required>
        <option value="" disabled selected>Escolha uma modalidade</option>
        @foreach($tipos as $tipo)
            <option value="{{$tipo->id}}" {{$tipo->id==old('modalidade_id',$plano->modalidade_id)?"selected":""}}>{{$tipo->nome}}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label for="inputModalidade">Tipo plano</label>
    <select class="form-control" name="modalidade_id" id="inputModalidade" required>
        <option value="" disabled selected>Escolha um tipo de plano</option>
        @foreach($tiposPlanos as $tipoplano)
            <option value="{{$tipoplano->id}}" {{$tipoplano->id==old('tipo_plano_id',$plano->tipo_plano_id)?"selected":""}}>{{$tipoplano->nome}}</option>
        @endforeach
    </select>
</div>
