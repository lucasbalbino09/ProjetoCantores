<form action="{{ route('cantor.store') }}" method="POST">
    @csrf
    <div>
        <label>Nome do Cantor:</label>
        <input type="text" name="nome">
    </div>
    <div>
        <label>Descricão:</label>
        <input type="text" name="descricao">
    </div>
    <div>
        <label>Descricão:</label>
        <select name="banda_id">
        @foreach ($banda as $item)
            <option value="{{$item->id}}">{{$item->nome}}</option>
            @endforeach
        </select>
    </div>
    <button type="submit">Enviar Dados</button>
</form>