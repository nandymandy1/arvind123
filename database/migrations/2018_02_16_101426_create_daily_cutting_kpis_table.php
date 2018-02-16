<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDailyCuttingKpisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daily_cutting_kpis', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('factory_id');
            $table->double('fabric_issued');  // fabric issued from the warehouse
            $table->string('pg_con');         // per garment consumption
            $table->string('tpg_con');        // Per garment total consumption
            $table->integer('people_cut');
            $table->integer('people_dept');
            $table->integer('no_mcs');
            $table->integer('fusing_out');
            $table->integer('emb_out');
            $table->integer('sew_out');
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
        Schema::dropIfExists('daily_cutting_kpis');
    }
}
