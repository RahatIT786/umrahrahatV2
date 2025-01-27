<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ramzaan_flavour_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('package_id')->constrained('ramzaan_packages')->onDelete('cascade');
            $table->foreignId('flavour_id')->constrained('ramzaan_flavours')->onDelete('cascade');
            $table->foreignId('makka_hotel_id')->constrained('hotel_details')->onDelete('cascade');
            $table->foreignId('madina_hotel_id')->constrained('hotel_details')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ramzaan_flavour_details');
    }
};
