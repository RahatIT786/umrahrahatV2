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
        Schema::create('transport_controllers', function (Blueprint $table) {
            $table->id();  // Creates an auto-incrementing id column
            $table->string('carType');  // For the car type (string field)
            $table->string('carSector');  // For the car sector (string field)
            $table->string('currency');  // For the currency (string field)
            $table->integer('seatsCount');  // For the seat count (integer field)
            $table->integer('price');  // For price (decimal field with 8 digits and 2 decimal places)
            $table->string('transportImage');  // For the image path (string field)
            $table->string('airConditioner');  // For air conditioner status (boolean field)
            $table->text('termsAndConditision');  // For terms and conditions (text field)
            $table->text('discription');  // For description (text field)
            $table->tinyInteger('delete_status')->default(1);  // For delete status (tiny integer, 1 is the default)
            $table->timestamps();  // Created at and updated at timestamps
    
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transport_controllers');
    }
};
