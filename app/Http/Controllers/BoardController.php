<?php

namespace App\Http\Controllers;

use App\Models\BoardConfig;
use App\Models\Game;
use App\Models\Property;
use Illuminate\Http\Request;

class BoardController extends Controller
{
    public function index()
    {
        return inertia('NewGame');
    }

    public function game(int $game_id)
    {
        return inertia('Game', [
            'gameState' => Game::getGameState($game_id),
            'gameId' => $game_id,
        ]);
    }
}
