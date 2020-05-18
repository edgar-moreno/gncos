<!--Vista para visualizar los datos del usuario-->


@extends('layouts.app')
@section('content')

@if (session()->has('status'))
				<div class="alert alert-success">{{ session('status') }}</div>
@endif

<div class="row px-md-5">
	<div class="col px-md-5">
		
		<p>
			<h2> Datos Personales <a href="{{ route('infos.create') }}" class="btn btn-outline-secondary"  type="button">Crear nuevo</a></h2>
			
		</p>

		<div class="table-responsive">
			<table class="table">
				<thead class="thead-dark">
					<tr>
						<th scope="col">id</th>
						<th scope="col">Documento</th>
						<th scope="col">Nombres</th>
						<th scope="col">Apellidos</th>
						<th scope="col">FechaNacimiento</th>
						<th scope="col">TelContacto</th>
						<th scope="col">Direccion</th>
						<th scope="col">Barrio</th>
						<th scope="col">Localidad</th>
						<th scope="col">FechaIngreso</th>
						<th scope="col">Campaña</th>
						<th scope="col">Gerencia</th>
						<th scope="col">Supervisor</th>
						<th scope="col">Creación</th>
						<th scope="col">Actualizacion</th>
						<th scope="col">Actions</th>
					</tr>
				</thead>
				<tbody>	
					@foreach ($infos as $info)
					<tr>
						<th scope="row">{{$info->id}}</th>
						<td>{{$info->Documento}}</td>
						<td>{{$info->Nombres}}</td>
						<td>{{$info->Apellidos}}</td>
						<td>{{$info->FechaNacimiento}}</td>
						<td>{{$info->TelContacto}}</td>
						<td>{{$info->Direccion}}</td>
						<td>{{$info->Barrio}}</td>
						<td>{{$info->Localidad}}</td>
						<td>{{$info->FechaIngreso}}</td>
						<td>{{$info->Campaña}}</td>
						<td>{{$info->Gerencia}}</td>
						<td>{{$info->Supervisor}}</td>
						<td>{{$info->created_at}}</td>
						<td>{{$info->updated_at}}</td>
						<td>
							<div class="input-group-prepend" id="button-addon4">
								<a href="{{ route('infos.edit', $info->id) }}" class="btn btn-outline-secondary" type="button">Editar</a>
							
								<form action="{{ route("infos.destroy", $info->id)}}" method="POST">
								<input type="submit" value="Eliminar" class="btn btn-outline-danger" type="button">
								{{ method_field('DELETE') }}
								@csrf
								</form>
							</div>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection