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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->decimal('subtotal',8,2,'.', ',')->nullable();
            // $table->decimal('discount')->default (0);
            $table->decimal('tax')->nullable();
            $table->decimal('total',12,2)->nullable();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('mobile');
            $table->string('email');
            $table->string('line1');
            $table->string('line2')->nullable();
            $table->string('county');
            $table->string('subcounty');
            $table->string('town');
            $table->string('specificarea');
            $table->enum('status', ['ordered', 'delivered', 'canceled'])->default('ordered');
            $table->boolean ('is_shipping_different')->default(false);
            $table->timestamps();
            $table->foreign('user_id')->references ('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
