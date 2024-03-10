<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\GameProperty;
use App\Models\Player;
use App\Models\Property;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GameController extends BaseController
{
    private const MAX_POSITION = 40;

    public function createNewGame(Request $request)
    {
        $validated = $request->validate([
            'name' => ['string', 'required', 'max:255'],
            'players' => ['integer', 'required', 'min:2', 'max:4'],
        ]);

        DB::beginTransaction();

        $location_ids = Property::select('id')->get()->pluck('id');

        $game_id = Game::insertGetId([
            'game_name' => $validated['name'],
        ]);

        for ($i = 0; $i < $validated['players']; $i++) {
            Player::insert([
                'game_id' => $game_id,
                'icon' => fake()->randomElement(['thimble', 'racecar', 'top_hat', 'battleship']),
            ]);
        }

        foreach ($location_ids as $location_id) {
            GameProperty::insert([
                'game_id' => $game_id,
                'location_id' => $location_id,
            ]);
        }

        DB::commit();

        return response()->redirectTo('/game/' . $game_id);
    }

    public function getGameState(int $game_id)
    {
        $game_state = Game::where('id', $game_id)
            ->with(['players', 'game_properties', 'game_properties.property'])->get();

        return response()->json($game_state);
    }

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

        $new_position['card'] = Property::where('location_id', $new_position['position'])->first();

        return response()->json($new_position, 200);
    }
}
