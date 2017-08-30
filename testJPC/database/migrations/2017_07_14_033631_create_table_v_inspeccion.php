<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableVInspeccion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('v_inspeccion', function (Blueprint $table)
        {
            $table->increments('id');
            $table->string('numv_inspeccion');
            $table->dateTime('fechav_inspeccion');
            $table->string('num_oficioVI');
            $table->integer('descarga')->nullable();
            $table->string('trampa')->nullable();
            $table->string('num_permiso');
            $table->dateTime('fechaemision_permiso');
            $table->string('obeservaciones')->nullable();
            $table->boolean('empresa_nueva')->nullable();
            $table->integer('establecimientos_id')->unsigned();
            //Referancias
            $table->foreign('establecimientos_id')->references('id')->on('establecimientos');
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
        Schema::dropIfExists('v_inspeccion');
    }
}
