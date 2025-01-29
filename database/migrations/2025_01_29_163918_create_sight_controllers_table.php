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
        Schema::create('sight_controllers', function (Blueprint $table) {
            $table->id();
            $table->string('sightName');
            $table->decimal('sightPrice', 8, 2); // Assuming sightPrice is a decimal, for prices
            $table->string('currency');
            $table->string('sightCity');
            $table->text('sightDiscription');
            $table->string('sightMainImage')->nullable(); // Image paths for the sight images
            $table->string('sightImage1')->nullable();
            $table->string('sightImage2')->nullable();
            $table->string('sightImage3')->nullable();
            $table->integer('delete_status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sight_controllers');
    }
};
