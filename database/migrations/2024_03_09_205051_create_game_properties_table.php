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
        Schema::create('game_properties', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('game_id')->unsigned();
            $table->bigInteger('property_id')->unsigned();
            $table->boolean('is_owned')->default(false);
            $table->bigInteger('owned_by')->unsigned()->nullable();
            $table->boolean('is_mortgaged')->default(false);
            $table->tinyInteger('houses')->default(0);

            $table->foreign('game_id')->references('id')->on('games');
            $table->foreign('property_id')->references('id')->on('properties');
            $table->foreign('owned_by')->references('id')->on('players');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('game_properties');
    }
};
