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
        Schema::create('catering_controller', function (Blueprint $table) {
            $table->id();
            $table->string('foodType');
            $table->decimal('foodPrice', 8, 2);
            $table->string('currency');
            $table->text('foodBreakFast')->nullable();// this is using for description 
            $table->text('foodLunch')->nullable();
            $table->text('foodDinner')->nullable();
            $table->string('foodBreakFastImagePath')->nullable();
            $table->string('foodLunchImagePath')->nullable();
            $table->string('foodDinnerImagePath')->nullable();
            $table->string('footPdf')->nullable();
            $table->integer('delete_status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('catering_controller');
    }
};
