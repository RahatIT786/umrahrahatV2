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
        Schema::create('ramzaan_packs', function (Blueprint $table) {
            $table->id();
            $table->string('master_name')->nullable();
            $table->json('package_data')->nullable();
            $table->json('departure_city')->nullable();
            $table->json('flight_name')->nullable();
            $table->json('infant_price')->nullable();
            $table->text('description')->nullable();
            $table->text('itinerary')->nullable();  
          
            $table->integer('days')->nullable();
            $table->timestamps();


           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ramzaan_packs');
    }
};
