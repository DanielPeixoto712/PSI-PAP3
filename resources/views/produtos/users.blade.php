@extends ('layout')

@section ('titulo')
@endsection
 <br><br><br><br><br><br><br>
@section ('navbar')
@endsection

@section ('menu')
@endsection
<h3 align="center">Tabela dos Users</h3>
@section ('produtos')
 <table border cellpadding= “1” cellpacing= “0” height =”200”>
 	<thead>
 		<tr>
 			<th>
 				ID
 			</th>
 			<th>
 				Nome
 			</th>
 			<th>
 				Contacto
 			</th>
 			<th>
 				Email
 			</th>
 			<th>
 				Permissões
 			</th>
 			<th>
 				Conta criada em
 			</th>

 		</tr>
 	</thead>


 	<tbody>
 		@foreach($users as $u)
 		<tr>
 			<td>
 				{{$u->id}}
 			</td>

 			<td>
 				{{$u->name}}
 			</td>

 			<td>
 				{{$u->contacto}}
 			</td>

 			<td>
 				{{$u->email}}
 			</td>

 			<td>
 				<h6 style="color: #04B404">{{$u->tipo_user}}</h6>
 			</td>

 			<td>
 				{{$u->created_at}}
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
