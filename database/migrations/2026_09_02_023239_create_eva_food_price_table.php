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
        Schema::create('eva_food_price', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('food_id');
            $table->float('food_price',)->default(0);
            $table->timestamps();

            $table->foreign('food_id')->references('id')->on('eva_restaurant_food')->onDelete('cascade')->onUpdate('cascade');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eva_food_price');
    }
};
