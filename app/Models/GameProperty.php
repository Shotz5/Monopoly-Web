<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Property;

class GameProperty extends Model
{
    protected $table = 'game_properties';

    public $timestamps = false;

    public function property()
    {
        return $this->hasOne(Property::class, 'id');
    }
}
