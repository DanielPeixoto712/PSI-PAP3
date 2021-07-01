@extends ('layout')

@section ('titulo')
@endsection

@section ('navbar')
@endsection

@section ('menu')
@endsection




<br><br><br><br><br>
@section ('produtos')

<form action="{{route('produtos.repo')}}" enctype="multipart/form-data" method="post">
    @csrf

    ID Produto :<input type="text" name="id_produto" value="{{old('id_produto')}}"><br>
    ID User :<input type="text" name="id" value="{{old('id')}}"><br>
    Produto :<input type="text" name="produto" value="{{old('produto')}}"><br>
    Denúncia:<input type="text" name="report" value="{{old('report')}}"><br>
    Vendedor :<input type="text" name="vendedor" value="{{old('vendedor')}}"><br>
   
   <input type="text" name="id"  value="{{Auth::user()->id}}"  style="display:none" /> <br>


    <input type="submit" name="Enviar">
</form>
@endsection


@section ('rodape')
@endsection
