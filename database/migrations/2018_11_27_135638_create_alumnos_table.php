<?php

use App\Alumno;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('seccion', [
                Alumno::SECCION[0], Alumno::SECCION[1], Alumno::SECCION[2], Alumno::SECCION[3], Alumno::SECCION[4], Alumno::SECCION[5], Alumno::SECCION[6], Alumno::SECCION[7], Alumno::SECCION[8]
            ]);
            $table->string('nombre');
            $table->string('cedula')->unique();
            $table->integer('grado');
            $table->string('direccion')->nullable();
            $table->string('telefonos')->nullable();
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
        Schema::dropIfExists('alumnos');
    }
}
