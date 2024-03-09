<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::table('monopoly_config')->insert([
            // Bottom
            [
                'location' => 1,
                'name' => 'Start',
                'price' => null,
            ],
            [
                'location' => 2,
                'name' => 'Mediter-ranean Avenue',
                'price' => 60,
            ],
            [
                'location' => 3,
                'name' => 'Community Chest',
                'price' => null,
            ],
            [
                'location' => 4,
                'name' => 'Baltic Avenue',
                'price' => 200,
            ],
            [
                'location' => 5,
                'name' => 'Income Tax',
                'price' => 200,
            ],
            [
                'location' => 6,
                'name' => 'Reading Railroad',
                'price' => 200,
            ],
            [
                'location' => 7,
                'name' => 'Oriental Avenue',
                'price' => 100,
            ],
            [
                'location' => 8,
                'name' => 'Chance',
                'price' => null,
            ],
            [
                'location' => 9,
                'name' => 'Vermont Avenue',
                'price' => 100,
            ],
            [
                'location' => 10,
                'name' => 'Connecticut Avenue',
                'price' => 120,
            ],
            [
                'location' => 11,
                'name' => 'In Jail or Visiting',
                'price' => null,
            ],
            // Left
            [
                'location' => 12,
                'name' => 'St. Charles Place',
                'price' => 140,
            ],
            [
                'location' => 13,
                'name' => 'Electric Company',
                'price' => 150,
            ],
            [
                'location' => 14,
                'name' => 'States Avenue',
                'price' => 140,
            ],
            [
                'location' => 15,
                'name' => 'Virginia Avenue',
                'price' => 160,
            ],
            [
                'location' => 16,
                'name' => 'Pennsylvania Railroad',
                'price' => 200,
            ],
            [
                'location' => 17,
                'name' => 'St. James Place',
                'price' => 180,
            ],
            [
                'location' => 18,
                'name' => 'Community Chest',
                'price' => 100,
            ],
            [
                'location' => 19,
                'name' => 'Tennessee Avenue',
                'price' => 180,
            ],
            [
                'location' => 20,
                'name' => 'New York Avenue',
                'price' => 200,
            ],
            // Top
            [
                'location' => 21,
                'name' => 'Free Parking',
                'price' => null,
            ],
            [
                'location' => 22,
                'name' => 'Kentucky Avenue',
                'price' => 220,
            ],
            [
                'location' => 23,
                'name' => 'Chance',
                'price' => null,
            ],
            [
                'location' => 24,
                'name' => 'Indiana Avenue',
                'price' => 220,
            ],
            [
                'location' => 25,
                'name' => 'Illinois Avenue',
                'price' => 240,
            ],
            [
                'location' => 26,
                'name' => 'B. & O. Railroad',
                'price' => 200,
            ],
            [
                'location' => 27,
                'name' => 'Atlantic Avenue',
                'price' => 260,
            ],
            [
                'location' => 28,
                'name' => 'Ventnor Avenue',
                'price' => 260,
            ],
            [
                'location' => 29,
                'name' => 'Water Works',
                'price' => 150,
            ],
            [
                'location' => 30,
                'name' => 'Marvin Gardens',
                'price' => 280,
            ],
            [
                'location' => 31,
                'name' => 'Go to Jail',
                'price' => null,
            ],
            // Right
            [
                'location' => 32,
                'name' => 'Pacific Avenue',
                'price' => 300,
            ],
            [
                'location' => 33,
                'name' => 'North Carolina Avenue',
                'price' => 300,
            ],
            [
                'location' => 34,
                'name' => 'Community Chest',
                'price' => null,
            ],
            [
                'location' => 35,
                'name' => 'Pennsylvania Avenue',
                'price' => 320,
            ],
            [
                'location' => 36,
                'name' => 'Short Line',
                'price' => 200,
            ],
            [
                'location' => 37,
                'name' => 'Chance',
                'price' => null,
            ],
            [
                'location' => 38,
                'name' => 'Park Place',
                'price' => 350,
            ],
            [
                'location' => 39,
                'name' => 'Luxury Tax',
                'price' => 100,
            ],
            [
                'location' => 40,
                'name' => 'Boardwalk',
                'price' => 400,
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::table('monopoly_config')->truncate();
    }
};
