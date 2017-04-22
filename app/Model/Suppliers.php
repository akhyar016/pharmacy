<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Suppliers extends Model
{
    public function company()
    {
    	return $this->belongsTo('App\Model\Companies');
    }

    public function medicines()
    {
    	return $this->hasMany('App\Model\Medicines');
    }
}
