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
        Schema::create('umrah_enquires', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('mobile');
            $table->date('date_of_travel');
            $table->integer('total_pax');
            $table->string('travel_type');
            $table->integer('delete_status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('umrah_enquires');
    }
};
