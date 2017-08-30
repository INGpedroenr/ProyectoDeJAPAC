<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableEstablecimientos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
    {
        Schema::create('establecimientos', function (Blueprint $table)
        {
            $table->increments('id');
            $table->string('nombre_establecimiento');
            $table->string('razon_social');
            $table->string('rfc');
            $table->string('actividad');
            $table->string('calle');
            $table->integer('num_interior')->nullable();
            $table->string('num_exterior')->nullable();
            $table->string('colonia');
            $table->integer('codigo_postal');
            $table->string('telefono');
            $table->integer('num_medidor')->nullable();
            $table->integer('cuenta')->nullable();
            $table->string('email');
            $table->rememberToken();
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
        Schema::dropIfExists('establecimientos');
    }
}
