<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableRalExternos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
 public function up()
    {
        Schema::create('ral_externos', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('fecha_programacion');
            $table->dateTime('fecha_resolutivo');
            $table->decimal('num_meses_cobrar', 11,2);
            $table->string('numresolutivo_administrativo');
            $table->string('num_oficioRA');
            $table->integer('ciil_externos_id')->unsigned();
            //Referencias
            $table->foreign('ciil_externos_id')->references('id')->on('ciil_externos');
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
        Schema::dropIfExists('ral_externos');
    }
}
