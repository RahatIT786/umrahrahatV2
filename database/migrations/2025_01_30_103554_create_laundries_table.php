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
        Schema::create('laundries', function (Blueprint $table) {
            $table->id();
            $table->string('laundry_type'); // Laundry Type (e.g., Dry Cleaning, Wash & Fold)
            $table->string('days'); // Estimated Days for Processing
            $table->decimal('price', 8, 2); // Price
            $table->string('cloth_count'); // Number of Clothes
            $table->longText('note')->nullable(); // Additional Notes
            $table->longText('description')->nullable(); // Summernote Description
            $table->string('image_path')->nullable(); 
            $table->integer('delete_status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laundries');
    }
};
