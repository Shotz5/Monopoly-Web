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
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('game_id')->unsigned();
            $table->enum('icon', ['thimble', 'racecar', 'top_hat', 'battleship']);
            $table->integer('position')->default(1);
            $table->integer('money')->default(1500);
            $table->boolean('is_in_jail')->default(false);
            $table->boolean('is_bankrupt')->default(false);

            $table->foreign('game_id')->references('id')->on('games');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('players');
    }
};
