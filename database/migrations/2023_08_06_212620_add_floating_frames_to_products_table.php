<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            //
            $table->decimal('regular_price_A0ff',8,2)->nullable();
            $table->decimal('regular_price_A05ff',8,2)->nullable();
            $table->decimal('regular_price_A1ff',8,2)->nullable();
            $table->decimal('regular_price_A2ff',8,2)->nullable();
            $table->decimal('regular_price_A3ff',8,2)->nullable();
            $table->decimal('regular_price_A4ff',8,2)->nullable();
            $table->decimal('regular_price_2pff',8,2)->nullable();
            $table->decimal('regular_price_3pff',8,2)->nullable();
            $table->decimal('regular_price_4pff',8,2)->nullable();
            $table->decimal('regular_price_5pff',8,2)->nullable();
            $table->decimal('regular_price_paff',8,2)->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            //
            $table->decimal('regular_price_A0ff',8,2)->nullable();
            $table->decimal('regular_price_A05ff',8,2)->nullable();
            $table->decimal('regular_price_A1ff',8,2)->nullable();
            $table->decimal('regular_price_A2ff',8,2)->nullable();
            $table->decimal('regular_price_A3ff',8,2)->nullable();
            $table->decimal('regular_price_A4ff',8,2)->nullable();
            $table->decimal('regular_price_2pff',8,2)->nullable();
            $table->decimal('regular_price_3pff',8,2)->nullable();
            $table->decimal('regular_price_4pff',8,2)->nullable();
            $table->decimal('regular_price_5pff',8,2)->nullable();
            $table->decimal('regular_price_paff',8,2)->nullable();
        });
    }
};
