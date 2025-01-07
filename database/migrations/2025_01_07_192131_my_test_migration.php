<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('alumnos', function (Blueprint $table) {
        $table->id();           // Crea una columna 'id' como clave primaria auto-incremental
        $table->string('nombre'); // Crea una columna 'nombre' para el nombre del alumno
        $table->string('email')->unique(); // Crea una columna 'email' con valores únicos
        $table->timestamps();     // Crea las columnas 'created_at' y 'updated_at'
    });
}


    /**
     * Reverse the migrations.
     */
    public function down()
{
    Schema::dropIfExists('alumnos'); // Elimina la tabla 'alumnos' si existe
}

};
