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
        Schema::table('common_forms', function (Blueprint $table) {
            $table->integer('delete_status')->default(1)->after('package_type');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('common_forms', function (Blueprint $table) {
            $table->dropColumn('delete_status');
        });
    }
};
