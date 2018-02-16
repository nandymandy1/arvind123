<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDailySewingKpisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daily_sewing_kpis', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('factory_id');
            $table->integer('no_load');
            $table->integer('no_line');
            $table->string('elo');
            $table->integer('target');
            $table->integer('actual');
            $table->integer('no_poeple');
            $table->integer('no_machines');
            $table->integer('no_helper');
            $table->integer('no_kaja');
            $table->integer('sew_opr');
            $table->double('sam');
            $table->integer('pcs_fin');
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
        Schema::dropIfExists('daily_sewing_kpis');
    }
}
