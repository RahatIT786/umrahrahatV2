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
        Schema::create('main_ziyarats', function (Blueprint $table) {
            $table->id(); // Auto-increment primary key
            // Package details
            $table->string('name');
            $table->string('service_type');
            $table->integer('package_days');
            $table->text('description');
            $table->string('packageImage')->nullable();
            $table->text('package_includes')->nullable();
            $table->text('flights')->nullable();
            $table->string('Depart_city')->nullable();
            $table->text('payment_policy')->nullable();
            $table->text('important_notes')->nullable();
            $table->text('cancellation_policy')->nullable();
            $table->text('inclusion')->nullable();
            $table->text('exclusion')->nullable();
            $table->text('itinerary')->nullable();
            $table->text('flight_transport')->nullable();
            $table->string('packageMeals')->nullable();
            $table->string('visa_taxes')->nullable();
            $table->string('laundray_type')->nullable();
            $table->string('food_type')->nullable();
            
            // Prices (integers instead of decimal)
            $table->integer('g_share_price'); // G share price
            $table->integer('qt_share_price'); // Qt share price
            $table->integer('qd_share_price'); // Qd share price
            $table->integer('t_share_price'); // T share price
            $table->integer('d_share_price'); // D share price
            $table->integer('single_price'); // Single price
            $table->integer('child_w_b'); // Child with bed price
            $table->integer('child_wo_b'); // Child without bed price
            $table->integer('infants'); // Infant price
            
            // Hotel IDs (comma-separated string)
            $table->string('hotelIds')->nullable();
            
            // Delete status (boolean)
            $table->integer('delete_status')->default(1); // Default is 1 (active)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('main_ziyarats');
    }
};
