<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class NominaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nominas = DB::table('nomina')->get();
        return view('nomina.nomina', compact('nominas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('nomina.registronomina');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('nomina')->insert([
         'Documento'=>$request->Documento,
         'CentroDeCostos'=>$request->CentroDeCostos,
         'Supervisor'=>$request->Supervisor,
         'NombreCompleto'=>$request->NombreCompleto,
         'Dias'=>$request->Dias,
         'Sueldo'=>$request->Sueldo,
         'AuxilioDeTransporte'=>$request->AuxilioDeTransporte,
         'HorasExtrasDiurnas'=>$request->HorasExtrasDiurnas,
         'AuxilioDeTransporteExtra'=>$request->AuxilioDeTransporteExtra,
         'Vacaciones'=>$request->Vacaciones,
         'Bonificacion'=>$request->Bonificacion,
         'Comisiones'=>$request->Comisiones,
         'CuotaSostenimientoProductivo'=>$request->CuotaSostenimientoProductivo,
         'DiasPendientesPorCancelar'=>$request->DiasPendientesPorCancelar,
         'DominicalYFestivo'=>$request->DominicalYFestivo,
         'HorasExtrasNocturnas'=>$request->HorasExtrasNocturnas,
         'IncapacidadEps'=>$request->IncapacidadEps,
         'RecargoNocturno'=>$request->RecargoNocturno,
         'SalarioIntegral70'=>$request->SalarioIntegral70,
         'Capacitacion'=>$request->Capacitacion,
         'AporteSalud'=>$request->AporteSalud,
         'AportePension'=>$request->AportePension,
         'AporteVoluntario'=>$request->AporteVoluntario,
         'LibranzasyPrestamos'=>$request->LibranzasyPrestamos,
         'DescuentoCarnet'=>$request->DescuentoCarnet,
         'InconsistenciaEnProceso'=>$request->InconsistenciaEnProceso,
         'MayorValorPagado'=>$request->MayorValorPagado,
         'Retardo'=>$request->Retardo,
         'RetencionEnLaFuente'=>$request->RetencionEnLaFuente,
         'DescuentoDiadema'=>$request->DescuentoDiadema,
         'MayorValorAuxilioTransporte'=>$request->MayorValorAuxilioTransporte,
         'TotalNetoPagado'=>$request->TotalNetoPagado,
         'FechaIngreso'=>$request->FechaIngreso,
         'Cargo'=>$request->Cargo,
         'SueldoBasico'=>$request->SueldoBasico,
         'Observacion'=>$request->Observacion,
         'created_at'=>now(),
         'updated_at'=>now()
          ]);
        return back()->with('status', 'Creado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $nomina = DB::table('nomina')->where('id', $id)->first();
        return view('nomina.editnomina', compact('nomina'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
        'Documento'=>'required|string',
        'CentroDeCostos'=>'required|string',
        'Supervisor'=>'required|string',
        'NombreCompleto'=>'required|string',
        'Dias'=>'required|string',
        'Sueldo'=>'required|string',
        'AuxilioDeTransporte'=>'required|string',
        'HorasExtrasDiurnas'=>'required|string',
        'AuxilioDeTransporteExtra'=>'required|string',
        'Vacaciones'=>'required|string',
        'Bonificacion'=>'required|string',
        'Comisiones'=>'required|string',
        'CuotaSostenimientoProductivo'=>'required|string',
        'DiasPendientesPorCancelar'=>'required|string',
        'DominicalYFestivo'=>'required|string',
        'HorasExtrasNocturnas'=>'required|string',
        'IncapacidadEps'=>'required|string',
        'RecargoNocturno'=>'required|string',
        'SalarioIntegral70'=>'required|string',
        'Capacitacion'=>'required|string',
        'AporteSalud'=>'required|string',
        'AportePension'=>'required|string',
        'AporteVoluntario'=>'required|string',
        'LibranzasyPrestamos'=>'required|string',
        'DescuentoCarnet'=>'required|string',
        'InconsistenciaEnProceso'=>'required|string',
        'MayorValorPagado'=>'required|string',
        'Retardo'=>'required|string',
        'RetencionEnLaFuente'=>'required|string',
        'DescuentoDiadema'=>'required|string',
        'MayorValorAuxilioTransporte'=>'required|string',
        'TotalNetoPagado'=>'required|string',
        'FechaIngreso'=>'required|string',
        'Cargo'=>'required|string',
        'SueldoBasico'=>'required|string',
        'Observacion'=>'required|string'
        ]);

        DB::table('nomina')->where('id', $id)->update($request->only('Documento','CentroDeCostos','Supervisor','NombreCompleto','Dias','Sueldo','AuxilioDeTransporte','HorasExtrasDiurnas','AuxilioDeTransporteExtra','Vacaciones','Bonificacion','Comisiones','CuotaSostenimientoProductivo','DiasPendientesPorCancelar','DominicalYFestivo','HorasExtrasNocturnas','IncapacidadEps','RecargoNocturno','SalarioIntegral70','Capacitacion','AporteSalud','AportePension','AporteVoluntario','LibranzasyPrestamos','DescuentoCarnet','InconsistenciaEnProceso','MayorValorPagado','Retardo','RetencionEnLaFuente','DescuentoDiadema','MayorValorAuxilioTransporte','TotalNetoPagado','FechaIngreso','Cargo','SueldoBasico','Observacion'));
        return back()->with('status', 'Editado con exito');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('nomina')->where('Documento', $id)->delete();
        return back()->with('status', 'Eliminado con exito');
    }
}
