<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Player;

class Game extends Model
{
    protected $table = 'games';

    public function players()
    {
        return $this->hasMany(Player::class);
    }

    public function getGameState(int $game_id)
    {
        return self::where('id', $game_id);
    }
}
