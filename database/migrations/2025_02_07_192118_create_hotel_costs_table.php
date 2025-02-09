<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('hotel_costs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('hotel_id');
            $table->date('hotelSeasonStart')->nullable();
            $table->date('hotelSeasonEnd')->nullable();
            $table->string('hotelMeal')->nullable();
            $table->decimal('hotelDouble', 10, 2)->nullable();
            $table->decimal('hotelTriple', 10, 2)->nullable();
            $table->decimal('hotelQuad', 10, 2)->nullable();
            $table->decimal('hotelQuint', 10, 2)->nullable();
            $table->timestamps();

            // Foreign key constraint (if `hotels` table exists)
            $table->foreign('hotel_id')->references('id')->on('hotel_details')->onDelete('cascade');
        });
    }

    public function down() {
        Schema::dropIfExists('hotel_costs');
    }
};
