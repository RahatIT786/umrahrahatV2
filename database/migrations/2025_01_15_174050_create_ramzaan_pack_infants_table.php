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
        Schema::create('ramzaan_pack_infants', function (Blueprint $table) {
            $table->id();
            $table->integer('infant');
            $table->integer('child');
            $table->integer('child_without_bed');
            $table->integer('child_with_bed');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ramzaan_pack_infants');
    }
};
