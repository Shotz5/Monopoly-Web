<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Game;

class Player extends Model
{
    protected $table = 'players';

    public function game()
    {
        return $this->hasOne(Game::class);
    }
}
