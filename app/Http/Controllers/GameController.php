<?php

namespace App\Http\Controllers;

use App\Models\BoardConfig;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class GameController extends BaseController
{
    private const MAX_POSITION = 40;

    public function newPosition(Request $request)
    {
        $validated = $request->validate([
            'position' => 'int|required'
        ]);

        $random_add = (rand(1, 6) + rand(1, 6));
        $new_position = [
            'position' => 0,
            'card' => null,
        ];

        if (($validated['position'] + $random_add) > self::MAX_POSITION)
        {
            $new_position['position'] = $random_add - (self::MAX_POSITION - $validated['position']);
        }
        else
        {
            $new_position['position'] = $validated['position'] + $random_add;
        }

        $new_position['card'] = BoardConfig::where('location', $new_position['position'])->first();

        return response()->json($new_position, 200);
    }
}
