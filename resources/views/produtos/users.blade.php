@extends ('layout')

@section ('titulo')
@endsection
 <br><br><br><br><br><br><br>
@section ('navbar')
@endsection

@section ('menu')
@endsection

@section ('produtos')
 
<table>
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
		</tr>
 
 	</tbody>
	</thead>
	@foreach($users as $u)
	<tr>
	<td>{{$u->id}}</td>
	</tr>


	<tr>
	<td>{{$u->name}}</td>
	</tr>


	<tr>
	<td>{{$u->contacto}}</td>
	</tr>
	@endforeach
</table> 


@endsection

@section ('rodape')
@endsection
