

@extends ('layout')

@section ('titulo')
@endsection

@section ('navbar')
@endsection

@section ('menu')
@endsection

<br><br><br><br><br>
@section ('produtos')

	@csrf
@method('patch')

<form action="{{route('produtos.update')}}" method="get">

	Escolha a Categoria:
	<select name="id_categoria">
        @foreach($categorias as $categoria)
        <option value="{{$categoria->id_categoria}}">{{$categoria->designacao}}</option>
        @endforeach
    </select>
    <br><br>

    
Escolha a Marca:
    <select name="id_marca">
        @foreach($marcas as $marca)
        <option value="{{$marca->id_marca}}">{{$marca->marca}}</option>
        @endforeach
    </select>
<br><br>

	Produto :<input type="text" name="produto" value="{{old('produto')}}"><br>
    Preço::<input type="text" name="preco" value="{{old('preco')}}"><br>
	Observações::<textarea name="observacoes">{{old('observacoes')}}</textarea><br>
	Informação::<input type="text" name="info" value="{{old('info')}}"><br>
	<input type="submit" name="Enviar">
</form>
@endsection


@section ('rodape')
@endsection
