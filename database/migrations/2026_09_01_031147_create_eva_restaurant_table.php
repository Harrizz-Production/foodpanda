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
        Schema::create('eva_restaurant', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('author_id');
            $table->string('restaurant_name');
            $table->string('restaurant_slug');
            $table->tinyInteger('flag_display')->default(1);
            $table->tinyInteger('status_restaurant')->default(0);
            $table->tinyInteger('carted_amount')->default(0);
            $table->timestamps();

            $table->foreign('author_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eva_restaurant');
    }
};
