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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->integer('location_id')->unique();
            $table->string('name', 255);
            $table->integer('price')->nullable();

            $table->integer('house_cost')->nullable();
            $table->integer('hotel_cost')->nullable();
            $table->integer('mortgage_price')->nullable();
            $table->integer('rent')->nullable();
            $table->integer('rent_1')->nullable();
            $table->integer('rent_2')->nullable();
            $table->integer('rent_3')->nullable();
            $table->integer('rent_4')->nullable();
            $table->integer('rent_5')->nullable();
            $table->string('color_group')->nullable();
            $table->integer('color_group_multiplier')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
