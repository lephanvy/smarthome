<?php

namespace App\Models\Home;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table='rooms';

    public $fillable = ['name', 'description', 'floor_id'];


}
