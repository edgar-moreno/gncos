<!--Vista para visualizar los datos del usuario-->

@extends('PlantillaLinks')
@extends('layouts.app')
@section('content')
@section('links')

@if (session()->has('status'))
				<div class="alert alert-success">{{ session('status') }}</div>
@endif

<div class="container">
	<div class="card ">
		<div class="card-header text-light bg-dark"> 
			<ul class="nav nav-tabs card-header-tabs pull-right"  id="myTab" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" id="noticias-tab" data-toggle="tab" href="#noticias" role="tab" aria-controls="noticias" aria-selected="true">Noticias</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="listado-tab" data-toggle="tab" href="#listado" role="tab" aria-controls="listado" aria-selected="false">Listado de colaboradores</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="nomina-tab" data-toggle="tab" href="#nomina" role="tab" aria-controls="nomina" aria-selected="false">Nómina</a>
				</li>
			</ul>
		</div>

		<div class="card-body">
			<div class="tab-content" id="myTabContent">
				<div class="tab-pane fade show active" id="noticias" role="tabpanel" aria-labelledby="noticias-tab">
					<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner">
						<div class="carousel-item active">
							<img src="https://i.ibb.co/54134SQ/colabora1.jpg" class="d-block w-100" alt="...">
						</div>
						<div class="carousel-item">
							<img src="https://i.ibb.co/Msw4VF0/colabora3.jpg" class="d-block w-100" alt="...">
						</div>
						<div class="carousel-item">
							<img src="https://i.ibb.co/KNXSHwH/colabora2.jpg" class="d-block w-100" alt="...">
						</div>
						</div>
						<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
				<div class="tab-pane fade" id="listado" role="tabpanel" aria-labelledby="listado-tab">
					<div class="row px-md-5">
						<h2>Listado de colabradores 
							<a href="{{ route('infos.create') }}" class="btn btn-outline-secondary"  type="button">Crear nuevo</a>
							
						</h2>
					
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
				<div class="tab-pane fade" id="nomina" role="tabpanel" aria-labelledby="nomina-tab">
					<a href="{{ action('NominaController@index') }}"  class="btn btn-outline-secondary"> Ver nómina</a>
					

				</div>
			</div>
		</div>
	</div>
</div>

@endsection