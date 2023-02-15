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
        Schema::create('apoderados', function (Blueprint $table) {
            $table->id();
            $table->string('APO_DP_RUT',10);
            $table->tinyInteger('APO_DP_ED');
            $table->string('APO_DP_NB',50);
            $table->string('APO_DP_APPA',50);
            $table->string('APO_DP_APMA',50);
            $table->string('APO_DP_GN',30);
            $table->string('APO_DP_EMAIL',30);
            $table->string('APO_DP_TEL',30);
            $table->string('APO_DP_TEL',120);
            $table->string('APO_DP_PARENT',120);
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
        Schema::dropIfExists('apoderados');
    }
};
