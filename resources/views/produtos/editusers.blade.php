

@extends ('layout')

@section ('titulo')
@endsection

@section ('navbar')
@endsection

@section ('menu')
@endsection

<br><br><br><br><br>
@section ('produtos')

 

<form action="{{route('users.update')}}" enctype="multipart/form-data" method="get">
   @csrf
@method('patch')
    

    


    Nome:<input type="text" name="name" value="{{$users->name}}"><br>
    Email :<input type="text" name="email" value="{{$users->email}}"><br>
    Password :<input type="password" name="password" value="{{$users->password}}"><br>
    Contacto:<input type="text" name="contacto" value="{{$users->contacto}}"><br><br>

    Permissão do Usuário:
    <select name="tipo_user">
        @foreach($users as $user)
        <option value="{{$users->id}}">{{$users->tipo_user}}</option>
        @endforeach
    </select>
    <br><br>
    
    <input type="submit" name="Enviar">
</form>
@endsection


@section ('rodape')
@endsection

