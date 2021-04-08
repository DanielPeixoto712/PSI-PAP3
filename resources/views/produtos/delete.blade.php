@extends ('layout')

@section ('titulo')
@endsection

@section ('navbar')
@endsection

@section ('menu')
@endsection

<br><br><br><br><br>
@section ('produtos')

<h2>Deseja apagar este produto: {{$produto->produto}}</h2>
<form action="{{route('produtos.destroy', ['id'=>$produto->id_produto])}}" method="post">
    @csrf
    @method('delete')
    <input type="submit" name="Enviar">
</form>
@endsection