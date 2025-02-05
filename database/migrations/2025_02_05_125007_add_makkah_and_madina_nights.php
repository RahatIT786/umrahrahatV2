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
        Schema::table('main_packages', function (Blueprint $table) {
            $table->string('makkah_nights')->after('visa_taxes');
            $table->string('madina_nights')->after('makkah_nights');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('main_packages', function (Blueprint $table) {
            $table->dropColumn('makkah_nights');
            $table->dropColumn('madina_nights');
        });
    }
};
