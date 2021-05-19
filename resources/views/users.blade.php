@extends ('layout')

@section ('titulo')
@endsection

@section ('navbar')
@endsection

@section ('menu')
@endsection

@section ('produtos')
  
  <div>
    <h1>Listagem dos usuários:</h1>
 @foreach($produto as $produto)
        <p>Nome: {{$produto->users->name}}</p>
 @endforeach
</div>

@endsection

@section ('rodape')
@endsection
