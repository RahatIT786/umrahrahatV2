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
                                // Add 'sightInclusion' and 'sightNotes' after 'sightDescription'
                                $table->text('sightInclusion')->nullable()->after('sightDiscription');
                                $table->text('sightNotes')->nullable()->after('sightInclusion');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sight_controllers', function (Blueprint $table) {
            // Remove the columns in the 'down' method
            $table->dropColumn(['sightInclusion', 'sightNotes']);
        });
    }
};
