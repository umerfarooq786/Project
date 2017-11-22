<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Route;
class Bus extends Model
{
    protected $fillable=[
        'bus_number','time','availablity','route_id'
    ];
    public function route(){
        return $this->belongsTo('App\Route','foreign_key');
    }
    /*public function driver()
    {
        return $this->belongsTo('App\Driver','foreign_key');
    }*/
}
