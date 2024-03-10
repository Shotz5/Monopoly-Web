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
}
