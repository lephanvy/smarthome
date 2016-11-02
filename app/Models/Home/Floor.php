<?php

namespace App\Models\Home;

use Illuminate\Database\Eloquent\Model;

class Floor extends Model
{
    protected $table='floors';

    public $fillable = ['name', 'description'];

    public function rooms(){
        return $this->hasMany('App\Models\Home\Room', 'floor_id');
    }
}
