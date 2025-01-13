<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDeleteStatusToHotelDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('hotel_details', function (Blueprint $table) {
            // Add the deleteStatus column with numeric values (1 or 2)
            $table->integer('deleteStatus')->default(1); // 1 is the default value for active status
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('hotel_details', function (Blueprint $table) {
            // Drop the deleteStatus column
            $table->dropColumn('deleteStatus');
        });
    }
}
