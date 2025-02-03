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
        Schema::create('package_user_enquires', function (Blueprint $table) {
            $table->id();
            $table->string('package_user_name');
            $table->string('package_user_email');
            $table->string('package_user_phone');
            $table->string('package_user_adult');
            $table->string('package_user_child');
            $table->string('package_user_package_name');
            $table->string('package_user_service_type');
            $table->string('package_user_departure_type');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('package_user_enquires');
    }
};
