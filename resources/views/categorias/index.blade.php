@extends ('layout')

@section ('titulo')
@endsection

@section ('navbar')
@endsection

@section ('menu')

@foreach($categorias as $categoria)
    <li><a href="{{route('categorias.show', ['id'=>$categoria->id_categoria])}} " class="list-group-item">{{$categoria->designacao}}</a></li>

@endforeach

@endsection



@section ('produtos')
@endsection

@section ('rodape')
@endsection





</ul>

   

