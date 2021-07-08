<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travelers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('mobile');
            $table->string('permanent_address');
            $table->string('travelling_address');
            $table->string('passport');
            $table->string('travel_ticket');
            $table->string('nid');
            $table->string('hotel_booking');
            $table->string('address_number');
            $table->string('local_guarantor');
            $table->string('travel_departure_cirtificate');
            $table->tinyInteger('status')->default('1')->nullable();
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
        Schema::dropIfExists('travelers');
    }
}
