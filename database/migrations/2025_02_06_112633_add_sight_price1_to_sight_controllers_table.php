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
        Schema::table('sight_controllers', function (Blueprint $table) {
            $table->decimal('sightPrice1', 10, 2)->nullable()->after('sightPrice'); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sight_controllers', function (Blueprint $table) {
            $table->dropColumn('sightPrice1');
        });
    }
};
