<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Property;
use App\Models\Game;
use App\Models\Player;

class PlayerProperty extends Model
{
    protected $table = 'player_properties';

    public function player()
    {
        return $this->hasOne(Player::class);
    }

    public function game()
    {
        return $this->hasOne(Game::class);
    }

    public function property()
    {
        return $this->hasOne(Property::class);
    }
}
