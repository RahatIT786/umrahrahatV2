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
        Schema::create('ramzaan_pack_sharings', function (Blueprint $table) {
            $table->id();
            
            $table->string('sharing_type');
            $table->unsignedBigInteger('ramzaan_pack_type_id');
          
            $table->integer('price')->nullable();
            $table->timestamps();


            $table->foreign('ramzaan_pack_type_id')->references('id')->on('ramzaan_pack_types')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ramzaan_pack_sharings');
    }
};
