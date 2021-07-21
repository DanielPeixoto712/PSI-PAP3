@extends ('layouts.nop')
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

    <input type="hidden" name="id_produto" value="{{$produtos->id_produto}}"><br>
    <input type="hidden" name="vendedor" value="{{$produtos->id}}"><br>
     Vendedor : {{$produtos->users->name}}<br>
    Anuncio :{{$produtos->produto}}<br>
    Denúncia: <textarea name="report">{{old('report')}}</textarea>
   
   
   <input type="text" name="id"  value="{{Auth::user()->id}}"  style="display:none" /> <br>


    <input type="submit" name="Enviar">
</form>
@endsection


@section ('rodape')
@endsection
