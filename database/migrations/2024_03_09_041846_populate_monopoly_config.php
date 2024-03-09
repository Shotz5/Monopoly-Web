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
                'location' => 'A1',
                'name' => 'Start',
                'price' => null,
            ],
            [
                'location' => 'A2',
                'name' => 'Mediter-ranean Avenue',
                'price' => 60,
            ],
            [
                'location' => 'A3',
                'name' => 'Community Chest',
                'price' => null,
            ],
            [
                'location' => 'A4',
                'name' => 'Baltic Avenue',
                'price' => 200,
            ],
            [
                'location' => 'A5',
                'name' => 'Income Tax',
                'price' => 200,
            ],
            [
                'location' => 'A6',
                'name' => 'Reading Railroad',
                'price' => 200,
            ],
            [
                'location' => 'A7',
                'name' => 'Oriental Avenue',
                'price' => 100,
            ],
            [
                'location' => 'A8',
                'name' => 'Chance',
                'price' => null,
            ],
            [
                'location' => 'A9',
                'name' => 'Vermont Avenue',
                'price' => 100,
            ],
            [
                'location' => 'A10',
                'name' => 'Connecticut Avenue',
                'price' => 120,
            ],
            [
                'location' => 'A11',
                'name' => 'In Jail or Visiting',
                'price' => null,
            ],
            // Left
            [
                'location' => 'B12',
                'name' => 'St. Charles Place',
                'price' => 140,
            ],
            [
                'location' => 'B13',
                'name' => 'Electric Company',
                'price' => 150,
            ],
            [
                'location' => 'B14',
                'name' => 'States Avenue',
                'price' => 140,
            ],
            [
                'location' => 'B15',
                'name' => 'Virginia Avenue',
                'price' => 160,
            ],
            [
                'location' => 'B16',
                'name' => 'Pennsylvania Railroad',
                'price' => 200,
            ],
            [
                'location' => 'B17',
                'name' => 'St. James Place',
                'price' => 180,
            ],
            [
                'location' => 'B18',
                'name' => 'Community Chest',
                'price' => 100,
            ],
            [
                'location' => 'B19',
                'name' => 'Tennessee Avenue',
                'price' => 180,
            ],
            [
                'location' => 'B20',
                'name' => 'New York Avenue',
                'price' => 200,
            ],
            // Top
            [
                'location' => 'C21',
                'name' => 'Free Parking',
                'price' => null,
            ],
            [
                'location' => 'C22',
                'name' => 'Kentucky Avenue',
                'price' => 220,
            ],
            [
                'location' => 'C23',
                'name' => 'Chance',
                'price' => null,
            ],
            [
                'location' => 'C24',
                'name' => 'Indiana Avenue',
                'price' => 220,
            ],
            [
                'location' => 'C25',
                'name' => 'Illinois Avenue',
                'price' => 240,
            ],
            [
                'location' => 'C26',
                'name' => 'B. & O. Railroad',
                'price' => 200,
            ],
            [
                'location' => 'C27',
                'name' => 'Atlantic Avenue',
                'price' => 260,
            ],
            [
                'location' => 'C28',
                'name' => 'Ventnor Avenue',
                'price' => 260,
            ],
            [
                'location' => 'C29',
                'name' => 'Water Works',
                'price' => 150,
            ],
            [
                'location' => 'C30',
                'name' => 'Marvin Gardens',
                'price' => 280,
            ],
            [
                'location' => 'C31',
                'name' => 'Go to Jail',
                'price' => null,
            ],
            // Right
            [
                'location' => 'D32',
                'name' => 'Pacific Avenue',
                'price' => 300,
            ],
            [
                'location' => 'D33',
                'name' => 'North Carolina Avenue',
                'price' => 300,
            ],
            [
                'location' => 'D34',
                'name' => 'Community Chest',
                'price' => null,
            ],
            [
                'location' => 'D35',
                'name' => 'Pennsylvania Avenue',
                'price' => 320,
            ],
            [
                'location' => 'D36',
                'name' => 'Short Line',
                'price' => 200,
            ],
            [
                'location' => 'D37',
                'name' => 'Chance',
                'price' => null,
            ],
            [
                'location' => 'D38',
                'name' => 'Park Place',
                'price' => 350,
            ],
            [
                'location' => 'D39',
                'name' => 'Luxury Tax',
                'price' => 100,
            ],
            [
                'location' => 'D40',
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
