

@extends ('layout')

@section ('titulo')
@endsection

@section ('navbar')
@endsection

@section ('menu')
@endsection

<br><br><br><br><br>
@section ('produtos')

 

<form action="{{route('produtos.updateuser')}}" enctype="multipart/form-data" method="get">
   @csrf
@method('patch')
    Permissão do Usuário:
    <select name="id_categoria">
        @foreach($users as $user)
        <option value="{{$users->id}}">{{$users->tipo_user}}</option>
        @endforeach
    </select>
    <br><br>

    


    Nome:<input type="text" name="name" value="{{$users->name}}"><br>
    Email :<input type="text" name="email" value="{{$users->email}}"><br>
    Password :<input type="password" name="password" value="{{$users->password}}"><br>
    Contacto:<input type="text" name="contacto" value="{{$users->contacto}}"><br>
    
    <input type="submit" name="Enviar">
</form>
@endsection


@section ('rodape')
@endsection

