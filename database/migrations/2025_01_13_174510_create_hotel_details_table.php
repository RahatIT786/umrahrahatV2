<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelDetailsTable extends Migration
{
    public function up()
    {
        Schema::create('hotel_details', function (Blueprint $table) {
            $table->id();
            $table->string('hotelName');
            $table->decimal('hotelPrice', 10, 2);
            $table->string('hotelCity');
            $table->string('hotelStarRating');
            $table->text('hotelAddress');
            $table->text('hotelDiscription');
            $table->time('hotelCheckInTime');
            $table->time('hotelCheckOutTime');
            $table->decimal('hotelDistance', 8, 2);
            $table->string('hotelMainImage')->nullable();
            $table->string('hotelImage1')->nullable();
            $table->string('hotelImage2')->nullable();
            $table->string('hotelImage3')->nullable();
            $table->string('hotelImage4')->nullable();
            $table->string('hotelImage5')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('hotel_details');
    }
}

