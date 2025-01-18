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
        Schema::create('ramzaan_pack_types', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('package_id')->constrained()->onDelete('cascade');
            $table->string('type_name');
        //    $table->unsignedBigInteger('package_type_id');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ramzaan_pack_types');
    }
};
