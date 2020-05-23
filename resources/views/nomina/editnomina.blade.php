<!--Vista para la creacion del usuario-->

@extends('PlantillaLinks')
@extends('layouts.app')
@section('content')
@section('links')
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header text-light bg-dark"><h5>Edicion de nomina</h2></div>
				<div class="card-body">
					<div class="form-row">	
					<div class="mx-auto">		
								<form action="{{ route('nomina.update', $nomina->id) }}" method="POST">

								@if (session()->has('status'))
									<div class="alert alert-success">{{ session('status') }}</div>
								@endif

								<div class="form-group">
									<div class="form-row">
										<div class="col-3">
											<label for="Documento" class="col-form-label-sm">N° Documento</label>
											<input type="text" name="Documento" class="form-control" id="Documento" placeholder="Ej. 1189191023" value="{{ old('Documento') ?? $nomina->Documento}}" >
											<span class="help-block">{{ $errors->first('Documento')}}</span>	
										</div>

										<div class="col">
											<label for="CentroDeCostos" class="col-form-label-sm">CentroDeCostos</label>
											<input type="text" name="CentroDeCostos" class="form-control" id="CentroDeCostos" placeholder="CentroDeCostos" value="{{ old('CentroDeCostos')?? $nomina->CentroDeCostos}}" >
											<span class="help-block">{{ $errors->first('CentroDeCostos')}}</span>	
										</div>

										<div class="col">
											<label for="Supervisor" class="col-form-label-sm">Supervisor</label>
											<input type="text" name="Supervisor" class="form-control" id="Supervisor" placeholder="Supervisor" value="{{ old('Supervisor')?? $nomina->Supervisor }}" >
											<span class="help-block">{{ $errors->first('Supervisor')}}</span>	
										</div>
									</div>
								</div>

								<div class="form-group">
									<div class="form-row">
										<div class="col">
											<label for="NombreCompleto" class="col-form-label-sm">NombreCompleto</label>
											<input type="text" name="NombreCompleto" class="form-control" id="NombreCompleto" placeholder="NombreCompleto" value="{{ old('NombreCompleto')?? $nomina->NombreCompleto}}" >
											<span class="help-block">{{ $errors->first('NombreCompleto')}}</span>	
										</div>

										<div class="col">
											<label for="Dias" class="col-form-label-sm">Dias</label>
											<input type="text" name="Dias" class="form-control" id="Dias" placeholder="Dias" value="{{ old('Dias')?? $nomina->Dias }}" >
											<span class="help-block">{{ $errors->first('Dias')}}</span>	
										</div>

										<div class="col-6">
											<label for="Sueldo" class="col-form-label-sm">Sueldo</label>
											<input type="text" name="Sueldo" class="form-control" id="Sueldo" placeholder="Sueldo" value="{{ old('Sueldo')?? $nomina->Sueldo }}" >
											<span class="help-block">{{ $errors->first('Sueldo')}}</span>	
										</div>
									</div>
								</div>

								<div class="form-group">
									<div class="form-row">
										<div class="col">
											<label for="AuxilioDeTransporte" class="col-form-label-sm">AuxilioDeTransporte</label>
											<input type="text" name="AuxilioDeTransporte" class="form-control" id="AuxilioDeTransporte" placeholder="AuxilioDeTransporte" value="{{ old('AuxilioDeTransporte')?? $nomina->AuxilioDeTransporte }}" >
											<span class="help-block">{{ $errors->first('AuxilioDeTransporte')}}</span>	
										</div>

										<div class="col">
											<label for="HorasExtrasDiurnas" class="col-form-label-sm">HorasExtrasDiurnas</label>
											<input type="text" name="HorasExtrasDiurnas" class="form-control" id="HorasExtrasDiurnas" placeholder="HorasExtrasDiurnas" value="{{ old('HorasExtrasDiurnas')?? $nomina->HorasExtrasDiurnas }}" >
											<span class="help-block">{{ $errors->first('HorasExtrasDiurnas')}}</span>	
										</div>
									</div>
								</div>

								<div class="form-group">
									<div class="form-row">
										<div class="col">
											<label for="AuxilioDeTransporteExtra" class="col-form-label-sm">AuxilioDeTransporteExtra</label>
											<input type="text" name="AuxilioDeTransporteExtra" class="form-control" id="AuxilioDeTransporteExtra" placeholder="AuxilioDeTransporteExtra" value="{{ old('AuxilioDeTransporteExtra')?? $nomina->AuxilioDeTransporte }}" >
											<span class="help-block">{{ $errors->first('AuxilioDeTransporteExtra')}}</span>	
										</div>

										<div class="col-9">
											<label for="Vacaciones" class="col-form-label-sm">Nombre de la Vacaciones</label>
											<input type="text" name="Vacaciones" class="form-control" id="Vacaciones" placeholder="Vacaciones" value="{{ old('Vacaciones')?? $nomina->Vacaciones }}" >
											<span class="help-block">{{ $errors->first('Vacaciones')}}</span>	
										</div>
									</div>
								</div>

								<div class="form-group">
									<div class="form-row">
										<div class="col">
											<label for="Bonificacion" class="col-form-label-sm">Nombre Gerente de Operación</label>
											<input type="text" name="Bonificacion" class="form-control" id="Bonificacion" placeholder="Bonificacion" value="{{ old('Bonificacion')?? $nomina->Bonificacion}}" >
											<span class="help-block">{{ $errors->first('Bonificacion')}}</span>	
										</div>

										<div class="col">
											<label for="Comisiones" class="col-form-label-sm">Comisiones(a)</label>
											<input type="text" name="Comisiones" class="form-control" id="Comisiones" placeholder="Comisiones" value="{{ old('Comisiones')?? $nomina->Comisiones }}" >
											<span class="help-block">{{ $errors->first('Comisiones')}}</span>	
										</div>

										<div class="col">
											<label for="CuotaSostenimientoProductivo" class="col-form-label-sm">CuotaSostenimientoProductivo(a)</label>
											<input type="text" name="CuotaSostenimientoProductivo" class="form-control" id="CuotaSostenimientoProductivo" placeholder="CuotaSostenimientoProductivo" value="{{ old('CuotaSostenimientoProductivo')?? $nomina->CuotaSostenimientoProductivo }}" >
											<span class="help-block">{{ $errors->first('CuotaSostenimientoProductivo')}}</span>	
										</div>
									</div>
								</div>

								<div class="col">
											<label for="DiasPendientesPorCancelar" class="col-form-label-sm">DiasPendientesPorCancelar(a)</label>
											<input type="text" name="DiasPendientesPorCancelar" class="form-control" id="DiasPendientesPorCancelar" placeholder="DiasPendientesPorCancelar" value="{{ old('DiasPendientesPorCancelar')?? $nomina->DiasPendientesPorCancelar }}" >
											<span class="help-block">{{ $errors->first('DiasPendientesPorCancelar')}}</span>	
										</div>

										<div class="col">
											<label for="DominicalYFestivo" class="col-form-label-sm">DominicalYFestivo(a)</label>
											<input type="text" name="DominicalYFestivo" class="form-control" id="DominicalYFestivo" placeholder="DominicalYFestivo" value="{{ old('DominicalYFestivo')?? $nomina->DominicalYFestivo }}" >
											<span class="help-block">{{ $errors->first('DominicalYFestivo')}}</span>	
										</div>
										<div class="col">
											<label for="HorasExtrasNocturnas" class="col-form-label-sm">HorasExtrasNocturnas(a)</label>
											<input type="text" name="HorasExtrasNocturnas" class="form-control" id="HorasExtrasNocturnas" placeholder="HorasExtrasNocturnas" value="{{ old('HorasExtrasNocturnas')?? $nomina->HorasExtrasNocturnas }}" >
											<span class="help-block">{{ $errors->first('HorasExtrasNocturnas')}}</span>	
										</div>
										<div class="col">
											<label for="IncapacidadEps" class="col-form-label-sm">IncapacidadEps(a)</label>
											<input type="text" name="IncapacidadEps" class="form-control" id="IncapacidadEps" placeholder="IncapacidadEps" value="{{ old('IncapacidadEps')?? $nomina->IncapacidadEps }}" >
											<span class="help-block">{{ $errors->first('IncapacidadEps')}}</span>	
										</div>
										<div class="col">
											<label for="RecargoNocturno" class="col-form-label-sm">RecargoNocturno(a)</label>
											<input type="text" name="RecargoNocturno" class="form-control" id="RecargoNocturno" placeholder="RecargoNocturno" value="{{ old('RecargoNocturno')?? $nomina->RecargoNocturno }}" >
											<span class="help-block">{{ $errors->first('RecargoNocturno')}}</span>	
										</div>
										<div class="col">
											<label for="SalarioIntegral70" class="col-form-label-sm">SalarioIntegral70(a)</label>
											<input type="text" name="SalarioIntegral70" class="form-control" id="SalarioIntegral70" placeholder="SalarioIntegral70" value="{{ old('SalarioIntegral70')?? $nomina->SalarioIntegral70 }}" >
											<span class="help-block">{{ $errors->first('SalarioIntegral70')}}</span>	
										</div>
										<div class="col">
											<label for="Capacitacion" class="col-form-label-sm">Capacitacion(a)</label>
											<input type="text" name="Capacitacion" class="form-control" id="Capacitacion" placeholder="Capacitacion" value="{{ old('Capacitacion')?? $nomina->Capacitacion }}" >
											<span class="help-block">{{ $errors->first('Capacitacion')}}</span>	
										</div>
										<div class="col">
											<label for="AporteSalud" class="col-form-label-sm">AporteSalud(a)</label>
											<input type="text" name="AporteSalud" class="form-control" id="AporteSalud" placeholder="AporteSalud" value="{{ old('AporteSalud')?? $nomina->AporteSalud }}" >
											<span class="help-block">{{ $errors->first('AporteSalud')}}</span>	
										</div>
										<div class="col">
											<label for="AportePension" class="col-form-label-sm">AportePension(a)</label>
											<input type="text" name="AportePension" class="form-control" id="AportePension" placeholder="AportePension" value="{{ old('AportePension')?? $nomina->AportePension }}" >
											<span class="help-block">{{ $errors->first('AportePension')}}</span>	
										</div>
										<div class="col">
											<label for="AporteVoluntario" class="col-form-label-sm">AporteVoluntario(a)</label>
											<input type="text" name="AporteVoluntario" class="form-control" id="AporteVoluntario" placeholder="AporteVoluntario" value="{{ old('AporteVoluntario')?? $nomina->AporteVoluntario }}" >
											<span class="help-block">{{ $errors->first('AporteVoluntario')}}</span>	
										</div>
										<div class="col">
											<label for="LibranzasyPrestamos" class="col-form-label-sm">LibranzasyPrestamos(a)</label>
											<input type="text" name="LibranzasyPrestamos" class="form-control" id="LibranzasyPrestamos" placeholder="LibranzasyPrestamos" value="{{ old('LibranzasyPrestamos')?? $nomina->LibranzasyPrestamos }}" >
											<span class="help-block">{{ $errors->first('LibranzasyPrestamos')}}</span>	
										</div>
										<div class="col">
											<label for="DescuentoCarnet" class="col-form-label-sm">DescuentoCarnet(a)</label>
											<input type="text" name="DescuentoCarnet" class="form-control" id="DescuentoCarnet" placeholder="DescuentoCarnet" value="{{ old('DescuentoCarnet')?? $nomina->DescuentoCarnet }}" >
											<span class="help-block">{{ $errors->first('DescuentoCarnet')}}</span>	
										</div>
										<div class="col">
											<label for="InconsistenciaEnProceso" class="col-form-label-sm">InconsistenciaEnProceso(a)</label>
											<input type="text" name="InconsistenciaEnProceso" class="form-control" id="InconsistenciaEnProceso" placeholder="InconsistenciaEnProceso" value="{{ old('InconsistenciaEnProceso')?? $nomina->InconsistenciaEnProceso }}" >
											<span class="help-block">{{ $errors->first('InconsistenciaEnProceso')}}</span>	
										</div>
										<div class="col">
											<label for="MayorValorPagado" class="col-form-label-sm">MayorValorPagado(a)</label>
											<input type="text" name="MayorValorPagado" class="form-control" id="MayorValorPagado" placeholder="MayorValorPagado" value="{{ old('MayorValorPagado')?? $nomina->MayorValorPagado }}" >
											<span class="help-block">{{ $errors->first('MayorValorPagado')}}</span>	
										</div>
										<div class="col">
											<label for="Retardo" class="col-form-label-sm">Retardo(a)</label>
											<input type="text" name="Retardo" class="form-control" id="Retardo" placeholder="Retardo" value="{{ old('Retardo')?? $nomina->Retardo }}" >
											<span class="help-block">{{ $errors->first('Retardo')}}</span>	
										</div>

										<div class="col">
											<label for="RetencionEnLaFuente" class="col-form-label-sm">RetencionEnLaFuente(a)</label>
											<input type="text" name="RetencionEnLaFuente" class="form-control" id="RetencionEnLaFuente" placeholder="RetencionEnLaFuente" value="{{ old('RetencionEnLaFuente')?? $nomina->RetencionEnLaFuente }}" >
											<span class="help-block">{{ $errors->first('RetencionEnLaFuente')}}</span>	
										</div>

										<div class="col">
											<label for="DescuentoDiadema" class="col-form-label-sm">DescuentoDiadema(a)</label>
											<input type="text" name="DescuentoDiadema" class="form-control" id="DescuentoDiadema" placeholder="DescuentoDiadema" value="{{ old('DescuentoDiadema')?? $nomina->DescuentoDiadema }}" >
											<span class="help-block">{{ $errors->first('DescuentoDiadema')}}</span>	
										</div>
										<div class="col">
											<label for="MayorValorAuxilioTransporte" class="col-form-label-sm">MayorValorAuxilioTransporte(a)</label>
											<input type="text" name="MayorValorAuxilioTransporte" class="form-control" id="MayorValorAuxilioTransporte" placeholder="MayorValorAuxilioTransporte" value="{{ old('MayorValorAuxilioTransporte')?? $nomina->MayorValorAuxilioTransporte }}" >
											<span class="help-block">{{ $errors->first('MayorValorAuxilioTransporte')}}</span>	
										</div>
										<div class="col">
											<label for="TotalNetoPagado" class="col-form-label-sm">TotalNetoPagado(a)</label>
											<input type="text" name="TotalNetoPagado" class="form-control" id="TotalNetoPagado" placeholder="TotalNetoPagado" value="{{ old('TotalNetoPagado')?? $nomina->TotalNetoPagado }}" >
											<span class="help-block">{{ $errors->first('TotalNetoPagado')}}</span>	
										</div>
										<div class="col">
											<label for="FechaIngreso" class="col-form-label-sm">FechaIngreso(a)</label>
											<input type="text" name="FechaIngreso" class="form-control" id="FechaIngreso" placeholder="FechaIngreso" value="{{ old('FechaIngreso')?? $nomina->FechaIngreso }}" >
											<span class="help-block">{{ $errors->first('FechaIngreso')}}</span>	
										</div>
										<div class="col">
											<label for="Cargo" class="col-form-label-sm">Cargo(a)</label>
											<input type="text" name="Cargo" class="form-control" id="Cargo" placeholder="Cargo" value="{{ old('Cargo')?? $nomina->Cargo }}" >
											<span class="help-block">{{ $errors->first('Cargo')}}</span>	
										</div>
										<div class="col">
											<label for="SueldoBasico" class="col-form-label-sm">SueldoBasico(a)</label>
											<input type="text" name="SueldoBasico" class="form-control" id="SueldoBasico" placeholder="SueldoBasico" value="{{ old('SueldoBasico')?? $nomina->SueldoBasico }}" >
											<span class="help-block">{{ $errors->first('SueldoBasico')}}</span>	
										</div>
										<div class="col">
											<label for="Observacion" class="col-form-label-sm">Observacion(a)</label>
											<input type="text" name="Observacion" class="form-control" id="Observacion" placeholder="Observacion" value="{{ old('Observacion')?? $nomina->Observacion }}" >
											<span class="help-block">{{ $errors->first('Observacion')}}</span>	
										</div>
								<div class="form-group">
									<input type="submit" value="Guardar información editada" class="btn btn-outline-secondary" onclick="window.close()">
								</div>
								@csrf
								{{ method_field('PUT') }}
							</form>
						</div>	
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection