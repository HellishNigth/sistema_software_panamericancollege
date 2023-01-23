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
        Schema::create('alumnos', function (Blueprint $table) {
            $table->id();
            $table->string('AL_DP_RUT',10);
            $table->tinyInteger('AL_DP_ED');
            $table->string('AL_DP_NB',50);
            $table->string('AL_DP_APPA',50);
            $table->string('AL_DP_APMA',50);
            $table->string('AL_DP_GN',30);
            $table->date('AL_DP_FCI');
            $table->date('AL_DP_FCE');
            $table->BigInteger('AL_DP_CLA');
            $table->timestamps();
            $table->unsignedBigInteger('curso_id');
            $table->foreign('curso_id')->references('id')->on('cursos');
            $table->unsignedBigInteger('matricula_id');
            $table->foreign('matricula_id')->references('NM_MTR')->on('matriculas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumnos');
    }
};
