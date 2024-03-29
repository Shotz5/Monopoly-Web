<?php

use App\Http\Controllers\GameController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/game-state/{id}', [GameController::class, 'getGameState']);

Route::post('/new-game', [GameController::class, 'createNewGame']);

Route::post('/roll-dice', [GameController::class, 'rollDice']);
