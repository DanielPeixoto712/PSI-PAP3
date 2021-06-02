@extends ('layout')

@section ('titulo')
@endsection
 <br><br><br><br><br><br><br>
@section ('navbar')
@endsection

@section ('menu')
@endsection

@section ('produtos')
 <table border cellpadding= “1” cellpacing= “0” height =”200”>
 	<thead>
 		<tr>
 			<th>
 				ID
 			</th>
 			<th>
 				Produto
 			</th>
 			<th>
 				Anunciante
 			</th>
 			<th>
 				Email
 			</th>
 			
 			<th>
 				Conta criada em
 			</th>
 			<th>
 				Preço
 			</th>

 			<th>
 				Marca
 			</th>

 			<th>
 				Designação
 			</th>


 		</tr>
 	</thead>


 	<tbody>
 		@foreach($produtos as $u)
 		<tr>
 			<td>
 				{{$u->id}}
 			</td>

 			<td>
 				{{$u->produto}}
 			</td>

 			<td>
 				{{$u->users->name}} 
 			</td>

 			<td>
 				{{$u->users->contacto}}
 			</td>

 			

 			<td>
 				{{$u->created_at}}
 			</td>

 			<td>
 				{{$u->preco}} €
 			</td>

 			<td>
 				{{$u->marca->marca}}
 			</td>

 			<td>
 				{{$u->categoria->designacao}}
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
