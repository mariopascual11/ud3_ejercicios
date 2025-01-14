<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerfilesTable extends Migration
{
    public function up()
    {
        Schema::create('perfiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('usuario_id')->constrained('alumnos')->onDelete('cascade'); // Clave foránea hacia la tabla alumnos
            $table->text('biografia')->nullable();  // Biografía del perfil
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('perfiles');
    }
}
