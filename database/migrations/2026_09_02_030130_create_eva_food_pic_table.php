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
        Schema::create('eva_food_pic', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('food_id');
            $table->string('file_mask', 50);
            $table->string('file_name', 50);
            $table->string('file_name_ori', 50);
            $table->string('file_loc', 50);
            $table->string('file_size', 150)->nullable();
            $table->string('file_ext', 5);
            $table->timestamps();

            $table->foreign('food_id')->references('id')->on('eva_restaurant_food')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eva_food_pic');
    }
};
