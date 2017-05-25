<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    //
    public function product(){
    	return $this->hasMany('App\Product','location_city','id');
    }

    public function company(){
    	return $this->hasMany('App\Company');
    }

}
