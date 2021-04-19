@extends ('layout')

@section ('titulo')
@endsection

@section ('navbar')
@endsection

@section ('menu')
@endsection

<br><br><br><br><br>
@section ('produtos')

<form action="{{route('produtos.store')}}" enctype="multipart/form-data" method="post">
    @csrf


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
   <input type="text" name="id"  value="{{Auth::user()->id}}"  style="display:none" />{{Auth::user()->id}} <br>
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
