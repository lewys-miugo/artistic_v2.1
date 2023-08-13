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
        Schema::create('about_us', function (Blueprint $table) {
            $table->id();
            $table->text('general')->nullable();
            $table->string('general_image')->nullable();
            $table->text('our_vision')->nullable();
            $table->string('vision_image')->nullable();
            $table->text('our_objective')->nullable();
            $table->string('objective_image')->nullable();
            $table->text('our_art')->nullable();
            $table->string('art_image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('about_us');
    }
};
