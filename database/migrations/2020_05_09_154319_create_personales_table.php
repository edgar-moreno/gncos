<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personales', function (Blueprint $table) {
            $table->increments('id');   
            $table->string('Documento')->unique;
            $table->string('Nombres');
            $table->string('Apellidos');
            $table->string('FechaNacimiento');
            $table->string('TelContacto');
            $table->string('Direccion');
            $table->string('Barrio');
            $table->string('Localidad');
            $table->string('FechaIngreso');
            $table->string('Campaña');
            $table->string('Gerencia');
            $table->string('Supervisor')->nullable;
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
        Schema::dropIfExists('personales');
    }
}
