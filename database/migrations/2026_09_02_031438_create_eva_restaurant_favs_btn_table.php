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
        Schema::create('eva_restaurant_favs_btn', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('restaurant_id');
            $table->bigInteger('author_id');
            $table->boolean('favourites_btn')->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eva_restaurant_favs_btn');
    }
};
