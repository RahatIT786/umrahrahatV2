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
        Schema::create('ramzaan_sharing_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sharing_id')->constrained('ramzaan_sharings')->onDelete('cascade');
            $table->foreignId('flavour_detail_id')->constrained('ramzaan_flavour_details')->onDelete('cascade');
            $table->integer('price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ramzaan_sharing_details');
    }
};
