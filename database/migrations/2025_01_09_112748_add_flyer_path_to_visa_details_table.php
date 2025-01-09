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
        Schema::table('visa_details', function (Blueprint $table) {
            $table->string('flyer_path')->nullable(); // Add the new column
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('visa_details', function (Blueprint $table) {
            $table->dropColumn('flyer_path'); // Remove the column if rolled back
        });
    }
};
