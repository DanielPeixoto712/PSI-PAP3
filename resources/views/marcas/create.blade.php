@extends ('layout')

@section ('titulo')
@endsection

@section ('navbar')
@endsection

@section ('menu')
@endsection

<br><br><br><br><br>
@section ('produtos')

<form action="{{route('marcas.store')}}" enctype="multipart/form-data" method="post">
    @csrf

    Marca :<input type="text" name="marca" value="{{old('marca')}}"><br>
   
   <input  type="text" name="id"  value="{{Auth::user()->id}}"  style="display:none"  />{{Auth::user()->id}} <br>

    <input type="submit" name="Enviar">
</form>
@endsection


@section ('rodape')
@endsection


