<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActividadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividads', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('nombactividad');
            $table->string('imagen');
            $table->date('fecha_inicio');
            $table->date('fecha_cierre');
            $table->time('hora_inicio');
            $table->time('hora_finalizacion');
            $table->string('ent_responsable');
            $table->integer('lugar_id')->unsigned()->nullable();
            $table->integer('perfil_instructors_id')->unsigned()->nullable();
            $table->timestamps();
            $table->foreign('lugar_id')->references('id')->on('lugars');
            $table->foreign('perfil_instructors_id')->references('id')->on('perfil_instructors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actividads');
    }
}
