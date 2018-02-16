<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDailyQualityKpisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daily_quality_kpis', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('factory_id');
            $table->double('dhu');
            $table->integer('passed_pcs');
            $table->integer('failed_pcs');
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
        Schema::dropIfExists('daily_quality_kpis');
    }
}
