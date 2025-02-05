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
        Schema::create('hotel_user_enquires', function (Blueprint $table) {
            $table->id();
            $table->string('package_user_name');
            $table->string('package_user_email');
            $table->string('package_user_phone');
            $table->string('package_user_adult');
            $table->string('package_user_child');
            $table->string('package_user_hotel_name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotel_user_enquires');
    }
};
