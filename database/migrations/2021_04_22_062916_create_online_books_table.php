<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOnlineBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('online_books', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->string('from')->nullable();
            $table->string('to')->nullable();
            $table->string('location')->nullable();
            $table->string('service_type')->nullable();
            $table->string('object_type')->nullable();
            $table->string('width')->nullable();
            $table->string('height')->nullable();
            $table->string('length')->nullable();
            $table->string('weight_kg')->nullable();
            $table->longText('ship_details')->nullable();
            $table->string('price')->nullable();
            $table->string('shipper_name')->nullable();
            $table->string('ship_com_name')->nullable();
            $table->string('ship_mobile')->nullable();
            $table->string('ship_email')->nullable();
            $table->string('ship_zip')->nullable();
            $table->string('ship_city')->nullable();
            $table->string('ship_state')->nullable();
            $table->longText('ship_address')->nullable();
            $table->string('ship_country')->nullable();
            $table->string('receive_name')->nullable();
            $table->string('receive_com_name')->nullable();
            $table->string('receive_mobile')->nullable();
            $table->string('receive_email')->nullable();
            $table->string('receive_zip')->nullable();
            $table->string('receive_city')->nullable();
            $table->string('receive_state')->nullable();
            $table->longText('receive_address')->nullable();
            $table->string('receive_country')->nullable();
            $table->integer('status')->default(0);
            $table->integer('notification')->default(0);
            $table->string('track_id')->nullable();
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
        Schema::dropIfExists('online_books');
    }
}
