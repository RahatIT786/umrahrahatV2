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
        Schema::create('laundry_forms', function (Blueprint $table) {
            $table->id();
            $table->string('user_name');
            $table->string('user_email');
            $table->string('user_phone');
            $table->integer('user_adult')->default(0);
            $table->integer('user_children')->default(0);
            $table->string('laundry_name');
            $table->string('laundry_type');
            $table->string('delete_status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laundry_forms');
    }
};
