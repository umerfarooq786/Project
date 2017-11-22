<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Bus;
class Route extends Model
{
    public function bus()
    {
        return $this->hasMany('App\Bus');
    }
}
