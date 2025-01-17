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
        Schema::create('main_packages', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('name'); // Package name
            $table->string('package_type_ids'); // Store array or object of type IDs
            $table->text('description')->nullable(); // Description of the package
            $table->string('packageImage')->nullable(); // Image file path (nullable)
            $table->text('payment_policy')->nullable(); // Payment policy
            $table->text('important_notes')->nullable(); // Important notes
            $table->text('cancellation_policy')->nullable(); // Cancellation policy
            $table->text('inclusion')->nullable(); // Inclusions
            $table->text('exclusion')->nullable(); // Exclusions
            $table->text('itinerary')->nullable(); // Itinerary
            $table->text('flight_transport')->nullable(); // Flight and transport details
            $table->text('packageMeals')->nullable(); // Meal options
            $table->string('visa_taxes')->nullable(); // Visa taxes (decimal value)
            $table->boolean('delete_status')->default(true); // Active status (default to true)
            $table->timestamps(); // Timestamps for created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('main_packages');
    }
};
