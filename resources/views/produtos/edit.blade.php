

@extends ('layout')

@section ('titulo')
@endsection

@section ('navbar')
@endsection

@section ('menu')
@endsection

<br><br><br><br><br>
@section ('produtos')

 

<form action="{{route('produtos.update')}}" enctype="multipart/form-data" method="get">
   @csrf
@method('patch')
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

    Preço:<input type="text" name="preco" value="{{$produto->preco}}"><br>
    Produto :<input type="text" name="produto" value="{{$produto->produto}}"><br>
    Observações:<textarea name="observacoes">{{$produto->observacoes}}</textarea><br>
    Informação:<input type="text" name="info" value="{{$produto->info}}"><br>
    <label>Imagem Capa</label><br>
<input type="file" name="imagem_capa">
    @if($errors->has('imagem_capa'))
    Verigique se introduziu a imagem corretamente.<br>
    @endif
    <input type="submit" name="Enviar">
</form>
@endsection


@section ('rodape')
@endsection

