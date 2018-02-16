<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDailyFinishingKpisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daily_finishing_kpis', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('factory_id');
            $table->integer('fin_dept');
            $table->integer('pcs_sew_wash');
            $table->integer('pcs_fed');
            $table->integer('pkd_pcs');
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
        Schema::dropIfExists('daily_finishing_kpis');
    }
}
