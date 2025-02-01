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
            $table->string('country')->nullable()->after('visa_type'); 
            $table->string('validity')->nullable()->after('country');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('visa_details', function (Blueprint $table) {
            $table->dropColumn('country');
            $table->dropColumn('validity');
        });
    }
};
