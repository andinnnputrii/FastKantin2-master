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
            Schema::create('order_items', function (Blueprint $table) {
                $table->id();
                $table->integer('order_id')->nullable();
                $table->integer('product_id')->nullable();
                $table->integer('quantity');
                $table->integer('price');
                $table->integer('total');
                $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_items');
    }
};
