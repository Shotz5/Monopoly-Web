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
        Schema::create('player_properties', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('game_id')->unsigned();
            $table->integer('location_id');
            $table->boolean('is_owned')->default(false);
            $table->bigInteger('owned_by')->unsigned()->nullable();
            $table->boolean('is_mortgaged')->default(false);
            $table->tinyInteger('houses')->default(0);

            $table->foreign('game_id')->references('id')->on('games');
            $table->foreign('location_id')->references('location_id')->on('properties');
            $table->foreign('owned_by')->references('id')->on('players');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('player_properties');
    }
};
