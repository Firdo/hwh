<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class supplier_name extends Model
{
    protected $fillable=['supplier_name'];


    public function invoice(){

return $this->hasMany(invoice::class);

}	

}
