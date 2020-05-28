<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNominaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nomina', function (Blueprint $table) {
            $table->increments('id');   
            $table->string('Documento')->unique;          
            $table->string('CentroDeCostos');
            $table->string('Supervisor');
            $table->string('NombreCompleto');
            $table->string('Dias');
            $table->string('Sueldo');
            $table->string('AuxilioDeTransporte');
            $table->string('HorasExtrasDiurnas');
            $table->string('AuxilioDeTransporteExtra');
            $table->string('Vacaciones');
            $table->string('Bonificacion');
            $table->string('Comisiones');
            $table->string('CuotaSostenimientoProductivo');
            $table->string('DiasPendientesPorCancelar');
            $table->string('DominicalYFestivo');
            $table->string('HorasExtrasNocturnas');
            $table->string('IncapacidadEps');
            $table->string('RecargoNocturno');
            $table->string('SalarioIntegral70');
            $table->string('Capacitacion');
            $table->string('AporteSalud');
            $table->string('AportePension');
            $table->string('AporteVoluntario');
            $table->string('LibranzasyPrestamos');
            $table->string('DescuentoCarnet');
            $table->string('InconsistenciaEnProceso');
            $table->string('MayorValorPagado');
            $table->string('Retardo');
            $table->string('RetencionEnLaFuente');
            $table->string('DescuentoDiadema');
            $table->string('MayorValorAuxilioTransporte');
            $table->string('TotalNetoPagado');
            $table->string('FechaIngreso');
            $table->string('Cargo');
            $table->string('SueldoBasico');
            $table->string('Observacion');         
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nomina');
    }
}
