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
        Schema::create('products', function (Blueprint $table) {
            $table->id();

            $table->string('unique_id')->unique()->nullable();
            $table->string('name');
            $table->string('status')->default(1);

            $table->string('slug');
            $table->string('short_description')->nullable();
            $table->text('description')->nullable();
            $table->decimal('regular_price',8,2)->nullable();
            $table->decimal('regular_price_A0',8,2)->default('5000.00')->nullable();
            $table->decimal('regular_price_A05',8,2)->default('5000.00')->nullable();
            $table->decimal('regular_price_A1',8,2)->default('4500.00')->nullable();
            $table->decimal('regular_price_A2',8,2)->default('3000.00')->nullable();
            $table->decimal('regular_price_A3',8,2)->default('2500.00')->nullable();
            $table->decimal('regular_price_A4',8,2)->default('2000.00')->nullable();
            $table->decimal('regular_price_2p',8,2)->default('6000.00')->nullable();
            $table->decimal('regular_price_3p',8,2)->default('7000.00')->nullable();
            $table->decimal('regular_price_4p',8,2)->default('8000.00')->nullable();
            $table->decimal('regular_price_5p',8,2)->default('9000.00')->nullable();
            $table->decimal('regular_price_pa',8,2)->default('10000.00')->nullable();
            // Framed paper
            $table->decimal('regular_price_A0f',8,2)->default('5000.00')->nullable();
            $table->decimal('regular_price_A05f',8,2)->default('5000.00')->nullable();
            $table->decimal('regular_price_A1f',8,2)->default('4500.00')->nullable();
            $table->decimal('regular_price_A2f',8,2)->default('3000.00')->nullable();
            $table->decimal('regular_price_A3f',8,2)->default('2500.00')->nullable();
            $table->decimal('regular_price_A4f',8,2)->default('2000.00')->nullable();
            $table->decimal('regular_price_2pf',8,2)->default('6000.00')->nullable();
            $table->decimal('regular_price_3pf',8,2)->default('7000.00')->nullable();
            $table->decimal('regular_price_4pf',8,2)->default('8000.00')->nullable();
            $table->decimal('regular_price_5pf',8,2)->default('9000.00')->nullable();
            $table->decimal('regular_price_paf',8,2)->default('10000.00')->nullable();


            // $table->decimal('sale_price',8,2)->nullable();
            // $table->string('SKU')->nullable();
            // $table->enum('stock_status',['instock','outofstock']);
            $table->boolean('featured')->default(false);
            // $table->unsignedInteger('quantity')->default(10);
            $table->string('image')->nullable();

            $table->text('image2')->nullable(); 
            $table->text('image3')->nullable(); 
            $table->text('image4')->nullable(); 
            $table->text('image5')->nullable(); 
            $table->text('image6')->nullable(); 
            $table->text('image7')->nullable(); 
            // $table->text('image8')->nullable(); 

            $table->bigInteger('category_id')->unsigned()->nullable();
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
