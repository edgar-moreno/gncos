<!--Vista para la creacion del usuario-->


@extends('PlantillaLinks')
@extends('layouts.app')
@section('content')
@section('links')


	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header text-light bg-dark"><h5>Creación de usuario</h2></div>
				<div class="card-body">
					
					<div class="row justify-content-center">	
						<div class="mx-auto">			
							<form action="{{ route('infos.store') }}" method="POST">
								@if (session()->has('status'))
									<div class="alert alert-success">{{ session('status') }}</div>
								@endif

								<div class="form-group">
									<div class="form-row">
										<div class="col-3">
											<label for="Documento1" class="col-form-label-sm">N° Documento</label>
											<input type="text" name="Documento" class="form-control" id="Documento1" placeholder="Ej. 1189191023" value="{{ old('Documento') }}" >
											<span class="help-block">{{ $errors->first('Documento')}}</span>	
										</div>

										<div class="col">
											<label for="Nombres1" class="col-form-label-sm">Nombres</label>
											<input type="text" name="Nombres" class="form-control" id="Nombres1" placeholder="Nombres" value="{{ old('Nombres') }}" >
											<span class="help-block">{{ $errors->first('Nombres')}}</span>	
										</div>

										<div class="col">
											<label for="Apellidos1" class="col-form-label-sm">Apellidos</label>
											<input type="text" name="Apellidos" class="form-control" id="Apellidos1" placeholder="Apellidos" value="{{ old('Apellidos') }}" >
											<span class="help-block">{{ $errors->first('Apellidos')}}</span>	
										</div>
									</div>
								</div>

								<div class="form-group">
									<div class="form-row">
										<div class="col">
											<label for="FechaNacimiento1" class="col-form-label-sm">Fecha nacimiento</label>
											<input type="text" name="FechaNacimiento" class="form-control" id="FechaNacimiento1" placeholder="FechaNacimiento" value="{{ old('FechaNacimiento') }}" >
											<span class="help-block">{{ $errors->first('FechaNacimiento')}}</span>	
										</div>

										<div class="col">
											<label for="TelContacto1" class="col-form-label-sm">Teléfono</label>
											<input type="text" name="TelContacto" class="form-control" id="TelContacto1" placeholder="TelContacto" value="{{ old('TelContacto') }}" >
											<span class="help-block">{{ $errors->first('TelContacto')}}</span>	
										</div>

										<div class="col-6">
											<label for="Direccion1" class="col-form-label-sm">Dirección</label>
											<input type="text" name="Direccion" class="form-control" id="Direccion1" placeholder="Direccion" value="{{ old('Direccion') }}" >
											<span class="help-block">{{ $errors->first('Direccion')}}</span>	
										</div>
									</div>
								</div>

								<div class="form-group">
									<div class="form-row">
										<div class="col">
											<label for="Barrio1" class="col-form-label-sm">Barrio</label>
											<input type="text" name="Barrio" class="form-control" id="Barrio1" placeholder="Barrio" value="{{ old('Barrio') }}" >
											<span class="help-block">{{ $errors->first('Barrio')}}</span>	
										</div>

										<div class="col">
											<label for="Localidad1" class="col-form-label-sm">Localidad</label>
											<input type="text" name="Localidad" class="form-control" id="Localidad1" placeholder="Localidad" value="{{ old('Localidad') }}" >
											<span class="help-block">{{ $errors->first('Localidad')}}</span>	
										</div>
									</div>
								</div>

								<div class="form-group">
									<div class="form-row">
										<div class="col">
											<label for="FechaIngreso1" class="col-form-label-sm">Fecha de ingreso</label>
											<input type="text" name="FechaIngreso" class="form-control" id="FechaIngreso1" placeholder="FechaIngreso" value="{{ old('FechaIngreso') }}" >
											<span class="help-block">{{ $errors->first('FechaIngreso')}}</span>	
										</div>

										<div class="col-9">
											<label for="Campaña1" class="col-form-label-sm">Nombre de la Campaña</label>
											<input type="text" name="Campaña" class="form-control" id="Campaña1" placeholder="Campaña" value="{{ old('Campaña') }}" >
											<span class="help-block">{{ $errors->first('Campaña')}}</span>	
										</div>
									</div>
								</div>

								<div class="form-group">
									<div class="form-row">
										<div class="col">
											<label for="Gerencia1" class="col-form-label-sm">Nombre Gerente de Operación</label>
											<input type="text" name="Gerencia" class="form-control" id="Gerencia1" placeholder="Gerencia" value="{{ old('Gerencia') }}" >
											<span class="help-block">{{ $errors->first('Gerencia')}}</span>	
										</div>

										<div class="col">
											<label for="Supervisor1" class="col-form-label-sm">Nombre Supervisor(a)</label>
											<input type="text" name="Supervisor" class="form-control" id="Supervisor1" placeholder="Supervisor" value="{{ old('Supervisor') }}" >
											<span class="help-block">{{ $errors->first('Supervisor')}}</span>	
										</div>
									</div>
								</div>

								<div class="form-group">
									<input type="submit" value="Crear nuevo usuario" class="btn btn-danger">
								</div>
								@csrf
							</form>
						</div>	
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection