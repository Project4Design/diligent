<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class VanFixed extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('van_fixed', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_offences');
            $table->integer('id_vans_fixed')->unsigned();
            $table->foreign('id_vans_fixed')->references('id_vans')->on('vans')->onDelete('cascade');
            $table->integer('id_additional_drive_fixed')->unsigned()->nullable();
            $table->foreign('id_additional_drive_fixed')->references('id_vans_additional')->on('vans_additional_driver')->onDelete('cascade');
            $table->string('conviction_code', 195)->nullable()->comment('Code of conviction');
            $table->string('date_conviction', 195)->nullable()->comment('date of conviction'); //DD-MM-YYYY
            $table->string('points', 195)->nullable()->comment('points');
            $table->string('fine_libras', 195)->nullable()->comment('fine libras if any');
            $table->string('ban_month', 195)->nullable()->comment('ban if any');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('van_fixed');
    }
}
