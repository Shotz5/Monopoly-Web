<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Player;
use App\Models\GameProperty;

class Game extends Model
{
    protected $table = 'games';

    public function players()
    {
        return $this->hasMany(Player::class);
    }

    public function game_properties()
    {
        return $this->hasMany(GameProperty::class);
    }

    public static function getGameState(int $game_id): ?self
    {
        $game_state = self::where('id', $game_id)
            ->with(['players', 'game_properties', 'game_properties.property'])
            ->get()
            ->first();

        return $game_state;
    }
}
