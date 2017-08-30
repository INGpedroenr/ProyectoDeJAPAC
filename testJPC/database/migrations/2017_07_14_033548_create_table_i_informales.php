<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableIInformales extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('i_informales', function (Blueprint $table)
        {
            $table->increments('id');
            $table->dateTime('fecha_inspeccion_informal')->nullable();
            $table->integer('num_infraccion')->nullable();
            $table->string('nombre_establecimiento')->nullable();
            $table->string('calle')->nullable();
            $table->string('num_exterior')->nullable();
            $table->string('num_interior')->nullable();
            $table->string('colonia')->nullable();
            $table->string('codigo_postal')->nullable();
            $table->string('actividad')->nullable();
            $table->string('cuenta')->nullable();
            $table->string('num_medidor')->nullable();
            $table->string('señas_particulares')->nullable();
            $table->string('nombre_inspector')->nullable();
            $table->integer('num_inspector')->nullable();
            $table->string('motivo_infraccion')->nullable();
            $table->string('observaciones')->nullable();
            $table->string('elaboro')->nullable();
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
        Schema::dropIfExists('i_informales');
    }
}
