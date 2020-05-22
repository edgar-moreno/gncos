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
            $table->id();
            $table->string('Documento')->unique;            
            $table->string('Centro de costos');
            $table->string('Jefe a cargo');
            $table->string('Nombre completo');
            $table->string('Dias');
            $table->string('Sueldo');
            $table->string('Auxilio de transporte');
            $table->string('Horas extras diurnas');
            $table->string('Auxilio de transporte extra');
            $table->string('Vacaciones');
            $table->string('Bonificacion');
            $table->string('Comisiones');
            $table->string('Cuota sostenimiento productivo');
            $table->string('Dias pendientes por cancelar');
            $table->string('Dominical y festivo');
            $table->string('Horas extras nocturnas');
            $table->string('Incapacidad eps');
            $table->string('Recargo nocturno');
            $table->string('Salario integral 70%');
            $table->string('Capacitacion');
            $table->string('Aporte salud');
            $table->string('Aporte pension');
            $table->string('Aporte voluntario');
            $table->string('Libranzas y prestamos');
            $table->string('Descuento carnet');
            $table->string('Inconsistencia en proceso');
            $table->string('Mayor valor pagado');
            $table->string('Retardo');
            $table->string('Retencion en la fuente');
            $table->string('Descuento diadema');
            $table->string('Mayor valor auxilio transporte');
            $table->string('Total neto pagado');
            $table->string('Fecha ingreso');
            $table->string('Cargo');
            $table->string('Sueldo básico');
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
