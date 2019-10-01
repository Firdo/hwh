<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class invoice extends Model
{
    protected $fillable=['driver_name','date', 'starting_place', 'start_time', 'end_time', 'end_place', 'vehicle_name', 'vehicle_time', 'handed_over', 'petrol'];


public function driver_name(){

return $this->belongsTo(driver_name::class);

}

public function vehicle_name(){

return $this->belongsTo(vehicle_name::class);

}

}