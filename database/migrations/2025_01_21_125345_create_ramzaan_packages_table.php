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
        Schema::create('ramzaan_packages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('days');
            // $table->foreignId('city_id')->constrained('departure_cities')->onDelete('cascade');
            // $table->foreignId('flight_id')->constrained('flight_management')->onDelete('cascade');
            $table->string('city');
            $table->string('flight');
            $table->longText('description');
            $table->integer('infant');
            $table->integer('child');
            $table->integer('child_with_bed')->nullable();
            $table->integer('child_without_bed');
            $table->longText('payment_policy');
            $table->longText('important_notes');
            $table->longText('cancellation_policy');
            $table->longText('flight_transport');
            $table->longText('meals');
            $table->longText('visa_taxes');
            $table->longText('inclusions');
            $table->longText('exclusions');
            $table->longText('itinerary');
            $table->string('image_path')->nullable();



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ramzaan_packages');
    }
};
