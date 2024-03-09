<?php

namespace App\Http\Controllers;

use App\Models\BoardConfig;
use App\Models\Property;
use Illuminate\Http\Request;

class BoardController extends Controller
{
    public function index()
    {
        return inertia('Index', ['boardConfig' => Property::all()->keyBy('location_id')]);
    }
}
