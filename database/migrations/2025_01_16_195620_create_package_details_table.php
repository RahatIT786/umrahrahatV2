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
        Schema::create('package_details', function (Blueprint $table) {
            $table->id();
            $table->integer('pkg_id');  // Primary key for the package detail table
            $table->string('pkg_type_id');  // Reference to the package type
            $table->string('makka_category');  // Makkah hotel category (e.g., 1-star, 2-star, etc.)
            $table->unsignedBigInteger('makka_hotel_id');  // Reference to Makkah hotel
            $table->string('madina_category');  // Madina hotel category (e.g., 1-star, 2-star, etc.)
            $table->unsignedBigInteger('madina_hotel_id');  // Reference to Madina hotel
            $table->string('meal_type');  // Type of meal provided (e.g., Super Saver, Gold, etc.)
            $table->string('laundry_type');  // Laundry service type (e.g., Standard, Deluxe, etc.)
            $table->decimal('g_share', 8, 2);
            $table->decimal('qt_share', 8, 2); 
            $table->decimal('qd_share', 8, 2); 
            $table->decimal('t_share', 8, 2);  
            $table->decimal('d_share', 8, 2); 
            $table->decimal('single',8,2);  // Number of single rooms
            $table->decimal('child_with_bed',8,2);  // Number of children with bed
            $table->decimal('child_no_bed',8,2);  // Number of children without bed
            $table->decimal('infant',8,2);  // Number of infants
            $table->text('package_includes');  // Details of what the package includes

            $table->timestamps();  // Automatically adds created_at and updated_at columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('package_details');
    }
};
