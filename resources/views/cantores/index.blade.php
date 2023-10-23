<h1>Lista de todos os Cantores </h1>
<h2>Catores:</h2>

@foreach ($cantors as $cantor)
    <ul>
        <li>{{$cantor -> nome}} - {{$cantor -> descricao}} </li>        
    </ul>
@endforeach

<a href="{{route('cantor.edit', $cantor->id)}}">
    <button>Editar Cantor</button>
</button>
</a>
<a href="{{route('cantor.create')}}">Cadastrar novo produto</a>
