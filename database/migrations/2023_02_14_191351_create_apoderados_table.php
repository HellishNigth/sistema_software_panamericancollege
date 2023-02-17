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
            $table->string('APO_DP_DOM',120);
            $table->string('APO_DP_PARENT',120);
            $table->unsignedSmallInteger('total_alumn');
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
        Schema::dropIfExists('apoderados');
    }
};
