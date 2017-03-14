<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class HomeLossesDamage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //FORM YOUR INSURANCE HISTORY , EL QUE SE ENCUENTRA EN HOME FORM INSURANCE
        Schema::create('home_losses_damage', function (Blueprint $table) {
            $table->increments('id_home_losses_damage');
            $table->integer('home_insurance_id')->unsigned();
            $table->foreign('home_insurance_id')->references('id_home_insurance')->on('home_insurance')->onDelete('cascade');
            $table->string('much_was_claim',20)->nullable();
            $table->string('type_claim',10)->nullable();
            $table->string('date_claim',10)->nullable();
            $table->string('claim_settled',3)->nullable();
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
        Schema::dropIfExists('home_losses_damage');
    }
}
