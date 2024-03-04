<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class GameController extends BaseController
{
    public function diceRoll()
    {
        return response()->json(rand(1, 6) + rand(1, 6), 200);
    }
}
