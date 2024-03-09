<?php

namespace App\Http\Controllers;

use App\Models\BoardConfig;
use Illuminate\Http\Request;

class BoardController extends Controller
{
    public function index()
    {
        return inertia('Index', ['boardConfig' => BoardConfig::all()->keyBy('location')]);
    }
}
