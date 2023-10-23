<form action="{{route('cantor.update',$cantor->id)}}" method="POST">
    @method("PUT")
    @csrf
    <div>
        <label>Nome do cantor :</label>
        <input type="text" name="nome" value="{{$cantor->nome}}">
    </div>
    <div>
        <label>descricao:</label>
        <input type="text" name="descricao" value="{{$cantor->descricao}}">
    </div> 
    <div>
        <label>Escolha a banda:</label>
        <select name="banda_id">
            @foreach ($bandas as $banda)
                <option value="{{$banda->id}}">{{$banda->nome}}</option>
            @endforeach
        </select>
    </div> 
    <button type="submit">Salvar</button>
</form>