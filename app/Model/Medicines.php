<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Medicines extends Model
{
    public function supplier()
    {
    	return $this->belongsTo('App\Model\Suppliers');
    }

    public function category()
    {
    	return $this->belongsTo('App\Model\Categories');
    }

    public function salerecord()
    {
        return $this->hasMany('App\Model\Salerecord');
    }

   
}
