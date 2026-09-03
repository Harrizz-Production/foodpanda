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
        Schema::create('eva_food_cat', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('restaurant_id');
            $table->string('cat_name');
            $table->tinyInteger('flag_display')->default(1);
            $table->tinyInteger('status_cat')->default(0);
            $table->timestamps();

            $table->foreign('restaurant_id')->references('id')->on('eva_restaurant')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eva_food_cat');
    }
};
