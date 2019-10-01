<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class driver_name extends Model
{
    protected $fillable=['name'];


    public function invoice(){

            return $this->hasMany(invoice::class);

    	    }
}
