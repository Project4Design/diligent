<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AccidentWitnessesDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accident_witnesses_details', function (Blueprint $table) {
            $table->increments('id_witnesses');
            $table->integer('id_management_accidents')->unsigned();
            $table->foreign('id_management_accidents')->references('id_accidents_management')->on('accidents')->onDelete('cascade');
            $table->string('witness_name')->nullable();
            $table->string('witness_address')->nullable();
            $table->string('witness_contact_number')->nullable();
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
        Schema::dropIfExists('accident_witnesses_details');
    }
}
