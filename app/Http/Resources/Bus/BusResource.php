<?php

namespace App\Http\Resources\Bus;

use Illuminate\Http\Resources\Json\Resource;

class BusResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'bus_number' =>$this->bus_number,
            'time' =>$this->time,
            'availablity' =>$this->availablity,
            'driver_id' =>$this->driver_id,
            'route_id' =>$this->route_id
            
        ];
    }
}
