<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBiMonthlyStrengthKpisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bi_monthly_strength_kpis', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('factory_id');
            $table->integer('no_working_days');
            $table->integer('factory_cost');
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
        Schema::dropIfExists('bi_monthly_strength_kpis');
    }
}
