<!--Vista para la edicion del usuario-->

@extends('PlantillaLinks')
@extends('layouts.app')
@section('content')
@section('links')
	<div class="form-row">	
		<div class="mx-auto">			
			<form action="{{ route('infos.update', $info->id) }}" method="POST">

				@if (session()->has('status'))
					<div class="alert alert-success">{{ session('status') }}</div>
				@endif

				<h2>Formulario para la edición de un nuevo usuario</h2>
				
				<div class="form-group">
					<div class="form-row">
						<div class="col-3">
							<label for="Documento" class="col-form-label-sm">N° Documento</label>
							<input type="text" name="Documento" class="form-control" id="Documento" placeholder="Documento" value="{{ old('Documento') ?? $info->Documento}}" >
							<span class="help-block">{{ $errors->first('Documento')}}</span>	
						</div>

						<div class="col">
							<label for="Nombres" class="col-form-label-sm">Nombres</label>
							<input type="text" name="Nombres" class="form-control" id="Nombres" placeholder="Nombres" value="{{ old('Nombres') ?? $info->Nombres}}" >
							<span class="help-block">{{ $errors->first('Nombres')}}</span>	
						</div>

						<div class="col">
							<label for="Apellidos" class="col-form-label-sm">Apellidos</label>
							<input type="text" name="Apellidos" class="form-control" id="Apellidos" placeholder="Apellidos" value="{{ old('Apellidos') ?? $info->Apellidos}}" >
							<span class="help-block">{{ $errors->first('Apellidos')}}</span>	
						</div>
					</div>
				</div>

				<div class="form-group">
					<div class="form-row">
						<div class="col">
							<label for="FechaNacimiento" class="col-form-label-sm">Fecha nacimiento</label>
							<input type="text" name="FechaNacimiento" class="form-control" id="FechaNacimiento" placeholder="FechaNacimiento" value="{{ old('FechaNacimiento') ?? $info->FechaNacimiento}}" >
							<span class="help-block">{{ $errors->first('FechaNacimiento')}}</span>	
						</div>

						<div class="col">
							<label for="TelContacto" class="col-form-label-sm">Teléfono</label>
							<input type="text" name="TelContacto" class="form-control" id="TelContacto" placeholder="TelContacto" value="{{ old('TelContacto') ?? $info->TelContacto}}" >
							<span class="help-block">{{ $errors->first('TelContacto')}}</span>	
						</div>

						<div class="col-6">
							<label for="Direccion" class="col-form-label-sm">Dirección</label>
							<input type="text" name="Direccion" class="form-control" id="Direccion" placeholder="Direccion" value="{{ old('Direccion') ?? $info->Direccion}}" >
							<span class="help-block">{{ $errors->first('Direccion')}}</span>	
						</div>
					</div>
				</div>

				<div class="form-group">
					<div class="form-row">
						<div class="col" class="col-form-label-sm">
							<label for="Barrio" class="col-form-label-sm">Barrio</label>
							<input type="text" name="Barrio" class="form-control" id="Barrio" placeholder="Barrio" value="{{ old('Barrio') ?? $info->Barrio}}" >
							<span class="help-block">{{ $errors->first('Barrio')}}</span>	
						</div>

						<div class="col">
							<label for="Localidad" class="col-form-label-sm">Localidad</label>
							<input type="text" name="Localidad" class="form-control" id="Localidad" placeholder="Localidad" value="{{ old('Localidad') ?? $info->Localidad}}" >
							<span class="help-block">{{ $errors->first('Localidad')}}</span>	
						</div>
					</div>
				</div>

				<div class="form-group">
					<div class="form-row">
						<div class="col">
							<label for="FechaIngreso" class="col-form-label-sm">Fecha de ingreso</label>
							<input type="text" name="FechaIngreso" class="form-control" id="FechaIngreso" placeholder="FechaIngreso" value="{{ old('FechaIngreso') ?? $info->FechaIngreso}}" >
							<span class="help-block">{{ $errors->first('FechaIngreso')}}</span>	
						</div>

						<div class="col-9">
							<label for="Campaña" class="col-form-label-sm">Nombre de la Campaña</label>
							<input type="text" name="Campaña" class="form-control" id="Campaña" placeholder="Campaña" value="{{ old('Campaña') ?? $info->Campaña}}" >
							<span class="help-block">{{ $errors->first('Campaña')}}</span>	
						</div>
					</div>
				</div>

				<div class="form-group">
					<div class="form-row">
						<div class="col">
							<label for="Gerencia" class="col-form-label-sm">Nombre del(a) Gerente de Operación</label>
							<input type="text" name="Gerencia" class="form-control" id="Gerencia" placeholder="Gerencia" value="{{ old('Gerencia') ?? $info->Gerencia}}" >
							<span class="help-block">{{ $errors->first('Gerencia')}}</span>	
						</div>

						<div class="col">
							<label for="Supervisor" class="col-form-label-sm">Nombre del(a) Supervisor(a)</label>
							<input type="text" name="Supervisor" class="form-control" id="Supervisor" placeholder="Supervisor" value="{{ old('Supervisor') ?? $info->Supervisor}}" >
							<span class="help-block">{{ $errors->first('Supervisor')}}</span>	
						</div>
					</div>
				</div>

				<div class="form-group">
					<input type="submit" value="Guardar información editada" class="btn btn-outline-secondary"  onclick="window.close()">
				</div>
				
				@csrf
					
				{{ method_field('PUT') }}

			</form>
		</div>	
	</div>
@endsection