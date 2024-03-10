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
        DB::table('properties')->insert([
            // Bottom
            [
                'location_id' => 1,
                'name' => 'Start',
                'price' => null,
                'house_cost' => null,
                'hotel_cost' => null,
                'mortgage_price' => null,
                'rent' => null,
                'rent_1' => null,
                'rent_2' => null,
                'rent_3' => null,
                'rent_4' => null,
                'rent_5' => null,
                'color_group' => null,
                'color_group_multiplier' => null,
            ],
            [
                'location_id' => 2,
                'name' => 'Mediter-ranean Avenue',
                'price' => 60,
                'house_cost' => 50,
                'hotel_cost' => 50,
                'mortgage_price' => 30,
                'rent' => 2,
                'rent_1' => 10,
                'rent_2' => 30,
                'rent_3' => 90,
                'rent_4' => 160,
                'rent_5' => 250,
                'color_group' => 'brown',
                'color_group_multiplier' => 2,
            ],
            [
                'location_id' => 3,
                'name' => 'Community Chest',
                'price' => null,
                'house_cost' => null,
                'hotel_cost' => null,
                'mortgage_price' => null,
                'rent' => null,
                'rent_1' => null,
                'rent_2' => null,
                'rent_3' => null,
                'rent_4' => null,
                'rent_5' => null,
                'color_group' => null,
                'color_group_multiplier' => null,
            ],
            [
                'location_id' => 4,
                'name' => 'Baltic Avenue',
                'price' => 200,
                'house_cost' => 50,
                'hotel_cost' => 50,
                'mortgage_price' => 30,
                'rent' => 4,
                'rent_1' => 20,
                'rent_2' => 60,
                'rent_3' => 180,
                'rent_4' => 320,
                'rent_5' => 450,
                'color_group' => 'brown',
                'color_group_multiplier' => 2,
            ],
            [
                'location_id' => 5,
                'name' => 'Income Tax',
                'price' => 200,
                'house_cost' => null,
                'hotel_cost' => null,
                'mortgage_price' => null,
                'rent' => null,
                'rent_1' => null,
                'rent_2' => null,
                'rent_3' => null,
                'rent_4' => null,
                'rent_5' => null,
                'color_group' => null,
                'color_group_multiplier' => null,
            ],
            [
                'location_id' => 6,
                'name' => 'Reading Railroad',
                'price' => 200,
                'house_cost' => null,
                'hotel_cost' => null,
                'mortgage_price' => 100,
                'rent' => 25,
                'rent_1' => 50,
                'rent_2' => 100,
                'rent_3' => 200,
                'rent_4' => null,
                'rent_5' => null,
                'color_group' => 'railroad',
                'color_group_multiplier' => 1,
            ],
            [
                'location_id' => 7,
                'name' => 'Oriental Avenue',
                'price' => 100,
                'house_cost' => 50,
                'hotel_cost' => 50,
                'mortgage_price' => 50,
                'rent' => 6,
                'rent_1' => 30,
                'rent_2' => 90,
                'rent_3' => 270,
                'rent_4' => 400,
                'rent_5' => 550,
                'color_group' => 'light_blue',
                'color_group_multiplier' => 2,
            ],
            [
                'location_id' => 8,
                'name' => 'Chance',
                'price' => null,
                'house_cost' => null,
                'hotel_cost' => null,
                'mortgage_price' => null,
                'rent' => null,
                'rent_1' => null,
                'rent_2' => null,
                'rent_3' => null,
                'rent_4' => null,
                'rent_5' => null,
                'color_group' => null,
                'color_group_multiplier' => null,
            ],
            [
                'location_id' => 9,
                'name' => 'Vermont Avenue',
                'price' => 100,
                'house_cost' => 50,
                'hotel_cost' => 50,
                'mortgage_price' => 50,
                'rent' => 6,
                'rent_1' => 30,
                'rent_2' => 90,
                'rent_3' => 270,
                'rent_4' => 400,
                'rent_5' => 550,
                'color_group' => 'light_blue',
                'color_group_multiplier' => 2,
            ],
            [
                'location_id' => 10,
                'name' => 'Connecticut Avenue',
                'price' => 120,
                'house_cost' => 50,
                'hotel_cost' => 50,
                'mortgage_price' => 60,
                'rent' => 6,
                'rent_1' => 40,
                'rent_2' => 100,
                'rent_3' => 300,
                'rent_4' => 450,
                'rent_5' => 600,
                'color_group' => 'light_blue',
                'color_group_multiplier' => 2,
            ],
            [
                'location_id' => 11,
                'name' => 'In Jail or Visiting',
                'price' => null,
                'house_cost' => null,
                'hotel_cost' => null,
                'mortgage_price' => null,
                'rent' => null,
                'rent_1' => null,
                'rent_2' => null,
                'rent_3' => null,
                'rent_4' => null,
                'rent_5' => null,
                'color_group' => null,
                'color_group_multiplier' => null,
            ],
            // Left
            [
                'location_id' => 12,
                'name' => 'St. Charles Place',
                'price' => 140,
                'house_cost' => 100,
                'hotel_cost' => 100,
                'mortgage_price' => 70,
                'rent' => 10,
                'rent_1' => 50,
                'rent_2' => 150,
                'rent_3' => 450,
                'rent_4' => 625,
                'rent_5' => 750,
                'color_group' => 'pink',
                'color_group_multiplier' => 2,
            ],
            [
                'location_id' => 13,
                'name' => 'Electric Company',
                'price' => 150,
                'house_cost' => null,
                'hotel_cost' => null,
                'mortgage_price' => null,
                'rent' => null,
                'rent_1' => null,
                'rent_2' => null,
                'rent_3' => null,
                'rent_4' => null,
                'rent_5' => null,
                'color_group' => null,
                'color_group_multiplier' => null,
            ],
            [
                'location_id' => 14,
                'name' => 'States Avenue',
                'price' => 140,
                'house_cost' => 100,
                'hotel_cost' => 100,
                'mortgage_price' => 70,
                'rent' => 10,
                'rent_1' => 50,
                'rent_2' => 150,
                'rent_3' => 450,
                'rent_4' => 625,
                'rent_5' => 750,
                'color_group' => 'pink',
                'color_group_multiplier' => 2,
            ],
            [
                'location_id' => 15,
                'name' => 'Virginia Avenue',
                'price' => 160,
                'house_cost' => 100,
                'hotel_cost' => 100,
                'mortgage_price' => 80,
                'rent' => 12,
                'rent_1' => 60,
                'rent_2' => 180,
                'rent_3' => 500,
                'rent_4' => 700,
                'rent_5' => 900,
                'color_group' => 'pink',
                'color_group_multiplier' => 2,
            ],
            [
                'location_id' => 16,
                'name' => 'Pennsylvania Railroad',
                'price' => 200,
                'house_cost' => null,
                'hotel_cost' => null,
                'mortgage_price' => 100,
                'rent' => 25,
                'rent_1' => 50,
                'rent_2' => 100,
                'rent_3' => 200,
                'rent_4' => null,
                'rent_5' => null,
                'color_group' => 'railroad',
                'color_group_multiplier' => 1,
            ],
            [
                'location_id' => 17,
                'name' => 'St. James Place',
                'price' => 180,
                'house_cost' => 100,
                'hotel_cost' => 100,
                'mortgage_price' => 90,
                'rent' => 14,
                'rent_1' => 70,
                'rent_2' => 200,
                'rent_3' => 550,
                'rent_4' => 750,
                'rent_5' => 950,
                'color_group' => 'orange',
                'color_group_multiplier' => 2,
            ],
            [
                'location_id' => 18,
                'name' => 'Community Chest',
                'price' => null,
                'house_cost' => null,
                'hotel_cost' => null,
                'mortgage_price' => null,
                'rent' => null,
                'rent_1' => null,
                'rent_2' => null,
                'rent_3' => null,
                'rent_4' => null,
                'rent_5' => null,
                'color_group' => null,
                'color_group_multiplier' => null,
            ],
            [
                'location_id' => 19,
                'name' => 'Tennessee Avenue',
                'price' => 180,
                'house_cost' => 100,
                'hotel_cost' => 100,
                'mortgage_price' => 90,
                'rent' => 14,
                'rent_1' => 70,
                'rent_2' => 200,
                'rent_3' => 550,
                'rent_4' => 750,
                'rent_5' => 950,
                'color_group' => 'orange',
                'color_group_multiplier' => 2,
            ],
            [
                'location_id' => 20,
                'name' => 'New York Avenue',
                'price' => 200,
                'house_cost' => 100,
                'hotel_cost' => 100,
                'mortgage_price' => 100,
                'rent' => 16,
                'rent_1' => 80,
                'rent_2' => 220,
                'rent_3' => 600,
                'rent_4' => 800,
                'rent_5' => 1000,
                'color_group' => 'orange',
                'color_group_multiplier' => 2,
            ],
            // Top
            [
                'location_id' => 21,
                'name' => 'Free Parking',
                'price' => null,
                'house_cost' => null,
                'hotel_cost' => null,
                'mortgage_price' => null,
                'rent' => null,
                'rent_1' => null,
                'rent_2' => null,
                'rent_3' => null,
                'rent_4' => null,
                'rent_5' => null,
                'color_group' => null,
                'color_group_multiplier' => null,
            ],
            [
                'location_id' => 22,
                'name' => 'Kentucky Avenue',
                'price' => 220,
                'house_cost' => 150,
                'hotel_cost' => 150,
                'mortgage_price' => 110,
                'rent' => 18,
                'rent_1' => 90,
                'rent_2' => 250,
                'rent_3' => 700,
                'rent_4' => 875,
                'rent_5' => 1050,
                'color_group' => 'red',
                'color_group_multiplier' => 2,
            ],
            [
                'location_id' => 23,
                'name' => 'Chance',
                'price' => null,
                'house_cost' => null,
                'hotel_cost' => null,
                'mortgage_price' => null,
                'rent' => null,
                'rent_1' => null,
                'rent_2' => null,
                'rent_3' => null,
                'rent_4' => null,
                'rent_5' => null,
                'color_group' => null,
                'color_group_multiplier' => null,
            ],
            [
                'location_id' => 24,
                'name' => 'Indiana Avenue',
                'price' => 220,
                'house_cost' => 150,
                'hotel_cost' => 150,
                'mortgage_price' => 110,
                'rent' => 18,
                'rent_1' => 90,
                'rent_2' => 250,
                'rent_3' => 700,
                'rent_4' => 875,
                'rent_5' => 1050,
                'color_group' => 'red',
                'color_group_multiplier' => 2,
            ],
            [
                'location_id' => 25,
                'name' => 'Illinois Avenue',
                'price' => 240,
                'house_cost' => 150,
                'hotel_cost' => 150,
                'mortgage_price' => 120,
                'rent' => 20,
                'rent_1' => 100,
                'rent_2' => 300,
                'rent_3' => 750,
                'rent_4' => 925,
                'rent_5' => 1100,
                'color_group' => 'red',
                'color_group_multiplier' => 2,
            ],
            [
                'location_id' => 26,
                'name' => 'B. & O. Railroad',
                'price' => 200,
                'house_cost' => null,
                'hotel_cost' => null,
                'mortgage_price' => 100,
                'rent' => 25,
                'rent_1' => 50,
                'rent_2' => 100,
                'rent_3' => 200,
                'rent_4' => null,
                'rent_5' => null,
                'color_group' => 'railroad',
                'color_group_multiplier' => 1,
            ],
            [
                'location_id' => 27,
                'name' => 'Atlantic Avenue',
                'price' => 260,
                'house_cost' => 150,
                'hotel_cost' => 150,
                'mortgage_price' => 130,
                'rent' => 22,
                'rent_1' => 110,
                'rent_2' => 330,
                'rent_3' => 800,
                'rent_4' => 975,
                'rent_5' => 1150,
                'color_group' => 'yellow',
                'color_group_multiplier' => 2,
            ],
            [
                'location_id' => 28,
                'name' => 'Ventnor Avenue',
                'price' => 260,
                'house_cost' => 150,
                'hotel_cost' => 150,
                'mortgage_price' => 130,
                'rent' => 22,
                'rent_1' => 110,
                'rent_2' => 330,
                'rent_3' => 800,
                'rent_4' => 975,
                'rent_5' => 1150,
                'color_group' => 'yellow',
                'color_group_multiplier' => 2,
            ],
            [
                'location_id' => 29,
                'name' => 'Water Works',
                'price' => 150,
                'house_cost' => null,
                'hotel_cost' => null,
                'mortgage_price' => null,
                'rent' => null,
                'rent_1' => null,
                'rent_2' => null,
                'rent_3' => null,
                'rent_4' => null,
                'rent_5' => null,
                'color_group' => null,
                'color_group_multiplier' => null,
            ],
            [
                'location_id' => 30,
                'name' => 'Marvin Gardens',
                'price' => 280,
                'house_cost' => 150,
                'hotel_cost' => 150,
                'mortgage_price' => 140,
                'rent' => 24,
                'rent_1' => 120,
                'rent_2' => 360,
                'rent_3' => 850,
                'rent_4' => 1025,
                'rent_5' => 1200,
                'color_group' => 'yellow',
                'color_group_multiplier' => 2,
            ],
            [
                'location_id' => 31,
                'name' => 'Go to Jail',
                'price' => null,
                'house_cost' => null,
                'hotel_cost' => null,
                'mortgage_price' => null,
                'rent' => null,
                'rent_1' => null,
                'rent_2' => null,
                'rent_3' => null,
                'rent_4' => null,
                'rent_5' => null,
                'color_group' => null,
                'color_group_multiplier' => null,
            ],
            // Right
            [
                'location_id' => 32,
                'name' => 'Pacific Avenue',
                'price' => 300,
                'house_cost' => 200,
                'hotel_cost' => 200,
                'mortgage_price' => 150,
                'rent' => 26,
                'rent_1' => 130,
                'rent_2' => 390,
                'rent_3' => 900,
                'rent_4' => 1100,
                'rent_5' => 1275,
                'color_group' => 'green',
                'color_group_multiplier' => 2,
            ],
            [
                'location_id' => 33,
                'name' => 'North Carolina Avenue',
                'price' => 300,
                'house_cost' => 200,
                'hotel_cost' => 200,
                'mortgage_price' => 150,
                'rent' => 26,
                'rent_1' => 130,
                'rent_2' => 390,
                'rent_3' => 900,
                'rent_4' => 1100,
                'rent_5' => 1275,
                'color_group' => 'green',
                'color_group_multiplier' => 2,
            ],
            [
                'location_id' => 34,
                'name' => 'Community Chest',
                'price' => null,
                'house_cost' => null,
                'hotel_cost' => null,
                'mortgage_price' => null,
                'rent' => null,
                'rent_1' => null,
                'rent_2' => null,
                'rent_3' => null,
                'rent_4' => null,
                'rent_5' => null,
                'color_group' => null,
                'color_group_multiplier' => null,
            ],
            [
                'location_id' => 35,
                'name' => 'Pennsylvania Avenue',
                'price' => 320,
                'house_cost' => 200,
                'hotel_cost' => 200,
                'mortgage_price' => 160,
                'rent' => 28,
                'rent_1' => 150,
                'rent_2' => 450,
                'rent_3' => 1000,
                'rent_4' => 1200,
                'rent_5' => 1400,
                'color_group' => 'green',
                'color_group_multiplier' => 2,
            ],
            [
                'location_id' => 36,
                'name' => 'Short Line',
                'price' => 200,
                'house_cost' => null,
                'hotel_cost' => null,
                'mortgage_price' => 100,
                'rent' => 25,
                'rent_1' => 50,
                'rent_2' => 100,
                'rent_3' => 200,
                'rent_4' => null,
                'rent_5' => null,
                'color_group' => 'railroad',
                'color_group_multiplier' => 1,
            ],
            [
                'location_id' => 37,
                'name' => 'Chance',
                'price' => null,
                'house_cost' => null,
                'hotel_cost' => null,
                'mortgage_price' => null,
                'rent' => null,
                'rent_1' => null,
                'rent_2' => null,
                'rent_3' => null,
                'rent_4' => null,
                'rent_5' => null,
                'color_group' => null,
                'color_group_multiplier' => null,
            ],
            [
                'location_id' => 38,
                'name' => 'Park Place',
                'price' => 350,
                'house_cost' => 200,
                'hotel_cost' => 200,
                'mortgage_price' => 175,
                'rent' => 35,
                'rent_1' => 175,
                'rent_2' => 500,
                'rent_3' => 1100,
                'rent_4' => 1300,
                'rent_5' => 1500,
                'color_group' => 'blue',
                'color_group_multiplier' => 2,
            ],
            [
                'location_id' => 39,
                'name' => 'Luxury Tax',
                'price' => 100,
                'house_cost' => null,
                'hotel_cost' => null,
                'mortgage_price' => null,
                'rent' => null,
                'rent_1' => null,
                'rent_2' => null,
                'rent_3' => null,
                'rent_4' => null,
                'rent_5' => null,
                'color_group' => null,
                'color_group_multiplier' => null,
            ],
            [
                'location_id' => 40,
                'name' => 'Boardwalk',
                'price' => 400,
                'house_cost' => 200,
                'hotel_cost' => 200,
                'mortgage_price' => 200,
                'rent' => 50,
                'rent_1' => 200,
                'rent_2' => 600,
                'rent_3' => 1400,
                'rent_4' => 1700,
                'rent_5' => 2000,
                'color_group' => 'blue',
                'color_group_multiplier' => 2,
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::table('properties')->truncate();
    }
};