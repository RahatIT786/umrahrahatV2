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
            $table->string('package_includes')->nullable()->after('packageImage');
            $table->string('flights')->nullable()->after('package_includes');
            $table->string('depart_city')->nullable()->after('flights');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('main_packages', function (Blueprint $table) {
            $table->dropColumn(['package_includes', 'flights', 'depart_city']);
        });
    }
};
