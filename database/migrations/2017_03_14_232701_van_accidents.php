<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class VanAccidents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('van_accidents', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_accidents');
            $table->integer('vans_id')->unsigned();
            $table->foreign('vans_id')->references('id_vans')->on('vans')->onDelete('cascade');
            $table->integer('id_additional_driver')->unsigned()->nullable();
            $table->foreign('id_additional_driver')->references('id_vans_additional')->on('vans_additional_driver')->onDelete('cascade');
            $table->string('type',195)->nullable()->comment('Type of accident');
            $table->string('date',195)->nullable()->comment('Date of accident'); //DD-MM-YYYY
            $table->string('damage',195)->nullable()->comment('Damage of accident');
            $table->string('cost',195)->nullable()->comment('cost of accident'); //Cost (Libras) -if know
            $table->string('fault',195)->nullable()->comment('Fault of the accident');
            $table->string('any_injuries',195)->nullable()->comment('any injuries of accidents'); //Yes or not
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
        Schema::dropIfExists('van_accidents');
    }
}
