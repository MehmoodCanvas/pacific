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
        Schema::create('product', function (Blueprint $table) {
            $table->id('product_id');
            $table->string('product_name');
            $table->string('product_slug')->unique(true);
            $table->text('product_description');
            $table->unsignedBigInteger('product_category_id');
            $table->string('product_image')->nullable(true);
            $table->string('product_sku')->nullable(true);
            $table->string(column: 'product_price')->nullable(false);
            $table->string('product_discount_price')->nullable(true);
            $table->enum('product_status',['enable','disable'])->nullable(false);
            $table->timestamps();
            $table->foreign('product_category_id')->references(columns: 'category_id')->on('category')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
