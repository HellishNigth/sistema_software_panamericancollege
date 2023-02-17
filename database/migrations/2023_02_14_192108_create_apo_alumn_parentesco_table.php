<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apo_alumn_parentesco', function (Blueprint $table) {
            $table->unsignedBigInteger('apoderado_id');
            $table->unsignedBigInteger('alumno_id');
            $table->primary(['apoderado_id','alumno_id']);

            //otros campos
            $table->string('parentesco');
            $table->unsignedSmallInteger('cant_alumn');

            //relaciones
            $table->foreign('apoderado_id')->references('id')->on('apoderados');
            $table->foreign('alumno_id')->references('id')->on('alumnos');
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
        Schema::dropIfExists('apo_alumn_parentesco');
    }
};
