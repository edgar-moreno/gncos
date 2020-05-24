 <!--Vista para visualizar los datos del usuario-->



@extends('layouts.app')
@section('content')

@if (session()->has('status'))
				<div class="alert alert-success">{{ session('status') }}</div>
@endif

<div class="row px-md-5">
	<div class="col px-md-5">
		
		<p>
			<h2> Nomina del empleado <a href="{{ route('nomina.create') }}" class="btn btn-outline-secondary"  type="button">Crear nuevo</a></h2>
			
		</p>

		<div class="table-responsive">
			<table class="table">
				<thead class="thead-dark">
					<tr>
						<th scope="col">id</th>
						<th scope="col">Documento</th>
						<th scope="col">CentroDeCostos</th>
						<th scope="col">Supervisor</th>
						<th scope="col">NombreCompleto</th>
						<th scope="col">Dias</th>
						<th scope="col">Sueldo</th>
						<th scope="col">AuxilioDeTransporte</th>
						<th scope="col">HorasExtrasDiurnas</th>
						<th scope="col">AuxilioDeTransporteExtra</th>
						<th scope="col">Vacaciones</th>
						<th scope="col">Bonificacion</th>
						<th scope="col">Comisiones</th>
						<th scope="col">CuotaSostenimientoProductivo</th>
						<th scope="col">DiasPendientesPorCancelar</th>
						<th scope="col">DominicalYFestivo</th>
						<th scope="col">HorasExtrasNocturnas</th>
						<th scope="col">IncapacidadEps</th>
						<th scope="col">RecargoNocturno</th>
						<th scope="col">SalarioIntegral70%</th>
						<th scope="col">Capacitacion</th>
						<th scope="col">AporteSalud</th>
						<th scope="col">AportePension</th>
						<th scope="col">AporteVoluntario</th>
						<th scope="col">LibranzasyPrestamos</th>
						<th scope="col">DescuentoCarnet</th>
						<th scope="col">InconsistenciaEnProceso</th>
						<th scope="col">MayorValorPagado</th>
						<th scope="col">Retardo</th>
						<th scope="col">RetencionEnLaFuente</th>
						<th scope="col">DescuentoDiadema</th>
						<th scope="col">MayorValorAuxilioTransporte</th>
						<th scope="col">TotalNetoPagado</th>
						<th scope="col">FechaIngreso</th>
						<th scope="col">Cargo</th>
						<th scope="col">SueldoBasico</th>
						<th scope="col">Observacion</th>
						<th scope="col">Creación</th>
						<th scope="col">Actualización</th>
						<th scope="col">Actions</th>
					</tr>
				</thead>
				<tbody>	
					@foreach ($nominas as $nomina)
					<tr>
						<th scope="row">{{$nomina->id}}</th>						
						<td>{{$nomina->Documento}}</td>
						<td>{{$nomina->CentroDeCostos}}</td>
						<td>{{$nomina->Supervisor}}</td>
						<td>{{$nomina->NombreCompleto}}</td>
						<td>{{$nomina->Dias}}</td>
						<td>{{$nomina->Sueldo}}</td>
						<td>{{$nomina->AuxilioDeTransporte}}</td>
						<td>{{$nomina->HorasExtrasDiurnas}}</td>
						<td>{{$nomina->AuxilioDeTransporteExtra}}</td>
						<td>{{$nomina->Vacaciones}}</td>
						<td>{{$nomina->Bonificacion}}</td>
						<td>{{$nomina->Comisiones}}</td>
						<td>{{$nomina->CuotaSostenimientoProductivo}}</td>
						<td>{{$nomina->DiasPendientesPorCancelar}}</td>
						<td>{{$nomina->DominicalYFestivo}}</td>
						<td>{{$nomina->HorasExtrasNocturnas}}</td>
						<td>{{$nomina->IncapacidadEps}}</td>
						<td>{{$nomina->RecargoNocturno}}</td>
						<td>{{$nomina->SalarioIntegral70}}</td>
						<td>{{$nomina->Capacitacion}}</td>
						<td>{{$nomina->AporteSalud}}</td>
						<td>{{$nomina->AportePension}}</td>
						<td>{{$nomina->AporteVoluntario}}</td>
						<td>{{$nomina->LibranzasyPrestamos}}</td>
						<td>{{$nomina->DescuentoCarnet}}</td>
						<td>{{$nomina->InconsistenciaEnProceso}}</td>
						<td>{{$nomina->MayorValorPagado}}</td>
						<td>{{$nomina->Retardo}}</td>
						<td>{{$nomina->RetencionEnLaFuente}}</td>
						<td>{{$nomina->DescuentoDiadema}}</td>
						<td>{{$nomina->MayorValorAuxilioTransporte}}</td>
						<td>{{$nomina->TotalNetoPagado}}</td>
						<td>{{$nomina->FechaIngreso}}</td>
						<td>{{$nomina->Cargo}}</td>
						<td>{{$nomina->SueldoBasico}}</td>
						<td>{{$nomina->Observacion}}</td>		
						<td>{{$nomina->created_at}}</td>
						<td>{{$nomina->updated_at}}</td>
						<td>
							<div class="input-group-prepend" Documento="button-addon4">
								<a href="{{ route('nomina.edit', $nomina->id) }}" class="btn btn-info" type="button">Editar</a>
							
								<form action="{{ route("nomina.destroy", $nomina->Documento)}}" method="POST">
								<input type="submit" value="Eliminar" class="btn btn-danger" type="button">
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