<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProyectosTable extends Migration
{
    public function up()
    {
        Schema::create('proyectos', function (Blueprint $table) {
            $table->id();
            $table->string('NombreProyecto');
            $table->string('fuenteFondos');
            $table->decimal('MontoPlanificado', 8, 2);
            $table->decimal('MontoPatrocinado', 8, 2);
            $table->decimal('MontoFondosPropios', 8, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('proyectos');
    }
}
