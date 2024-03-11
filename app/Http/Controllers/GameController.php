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

        $property_ids = Property::select('id')->get()->pluck('id');

        $game_id = Game::insertGetId([
            'game_name' => $validated['name'],
        ]);

        for ($i = 0; $i < $validated['players']; $i++) {
            Player::insert([
                'game_id' => $game_id,
                'icon' => fake()->randomElement(['thimble', 'racecar', 'top_hat', 'battleship']),
            ]);
        }

        foreach ($property_ids as $property_id) {
            GameProperty::insert([
                'game_id' => $game_id,
                'property_id' => $property_id,
            ]);
        }

        DB::commit();

        return response()->redirectTo('/game/' . $game_id);
    }

    public function getGameState(int $game_id)
    {
        $game_state = Game::where('id', $game_id)
            ->with(['players', 'game_properties', 'game_properties.property'])
            ->get()
            ->first();

        return response()->json($game_state);
    }

    public function rollDice(Request $request)
    {
        $validated = $request->validate([
            'player' => 'int|required'
        ]);

        $player = Player::findOrFail($validated['player']);
        $random_add = rand(1, 6) + rand(1, 6);

        if (($player->position + $random_add) > self::MAX_POSITION)
        {
            $player->position = $random_add - (self::MAX_POSITION - $player->position);
        }
        else
        {
            $player->position = $player->position + $random_add;
        }

        $player->save();

        return response()->json($player, 200);
    }
}
