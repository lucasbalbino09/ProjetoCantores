<ul>
    <li><h1> {{ $cantor->nome }}</h1></li>
    <li>Descricao: {{ $cantor->descricao }}</li>   
</ul>
<Form action="{{route('cantor.destroy',$cantor->id)}}" method="POST">
@method('delete')
@csrf
<button type="submit">Excluir Cantor</button>
</Form>

<a href="{{route('cantor.index')}}">
<button>Voltar para o menu</button>
</button>
</a>