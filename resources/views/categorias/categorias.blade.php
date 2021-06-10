@extends ('layout')

@section ('titulo')
@endsection
 <br><br><br><br><br><br><br>
@section ('navbar')
@endsection

@section ('menu')
@endsection
<h3 align="center">Tabela das Categorias</h3>
<div align="center">
        <a href="{{route('categorias.create')}}"><button  type="button" class="btn btn-outline-primary" >Criar</button></a>
        
</div>


@section ('produtos')


 <table border cellpadding= “1” cellpacing= “0” height =”200” align="center">
 
 	<thead>	
 		<tr>

 			<th>
 				ID Categoria
 			</th>

 			<th>
 				Categoria
 			</th>
 			


 		</tr>
 	</thead>


 	<tbody>
 		@foreach($categoria as $u)
 		<tr>
 			 <td>
 				{{$u->id_categoria}}
 			</td>

 			<td>
 				{{$u->designacao}}
 			</td>

 			

 		</tr>

 		@endforeach
 	</tbody>
 </table>


@endsection

<br>
@section ('rodape')
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
@endsection

