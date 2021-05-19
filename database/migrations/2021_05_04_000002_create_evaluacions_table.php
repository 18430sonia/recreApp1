<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvaluacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluacions', function (Blueprint $table) {
            $table->Increments('id');
            $table->date('fecha_evaluacion');
            $table->string('calif_instructor');
            $table->string('calif_actividad');
            $table->integer('actividad_users_id')->unsigned()->nullable();
            $table->timestamps();
            $table->foreign('actividad_users_id')->references('id')->on('actividad_users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('evaluacions');
    }
}
