<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RelationsBusiness extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relations_business', function (Blueprint $table) {
            $table->increments('id_relations_business');
            $table->integer('business_id')->unsigned();
            $table->foreign('business_id')->references('id_insurance_bussiness')->on('bussiness')->onDelete('cascade');
            $table->string('porcentage_collection')->nullable();
            $table->string('many_persons')->nullable();
            $table->string('often_kitchen')->nullable();
            $table->string('basket_fryer')->nullable();
            $table->string('maximum_occupy')->nullable();
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
        Schema::dropIfExists('relations_business');
    }
}
