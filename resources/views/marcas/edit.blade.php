

@extends ('layout')

@section ('titulo')
@endsection

@section ('navbar')
@endsection

@section ('menu')
@endsection

<br><br><br><br><br>
@section ('produtos')

 

<form action="{{route('marcas.update')}}" enctype="multipart/form-data" method="get">
   @csrf
@method('patch')
    

    


    Nome:<input type="text" name="marca" value="{{$marca->marca}}"><br>
    

    
    <input type="submit" name="Enviar">
</form>
@endsection


@section ('rodape')
@endsection

