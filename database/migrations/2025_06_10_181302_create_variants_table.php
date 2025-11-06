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
        Schema::create('variant', function (Blueprint $table) {
            $table->id('variant_id');
            $table->string('variant_name')->nullable(false);
            $table->string('variant_price')->nullable(true);
            $table->string('variant_sku')->nullable(true);
            $table->foreignId('variant_product_id')->constrained('product','product_id')->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('variant');
    }
};
