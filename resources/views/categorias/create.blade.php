@extends ('layout')

@section ('titulo')
@endsection

@section ('navbar')
@endsection

@section ('menu')
@endsection

<br><br><br><br><br>
@section ('produtos')

<form action="{{route('categorias.store')}}" enctype="multipart/form-data" method="post">
    @csrf

    Categoria :<input type="text" name="designacao" value="{{old('designacao')}}"><br>
   
   <input type="text" name="id"  value="{{Auth::user()->id}}"  style="display:none" /> <br>

    <input type="submit" name="Enviar">
</form>
@endsection


@section ('rodape')
@endsection
