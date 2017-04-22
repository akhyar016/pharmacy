<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Companies extends Model
{
    public function categories()
    {
    	return $this->hasMany('App\Model\Categories');
    }

    public function suppliers()
    {
    	return $this->hasMany('App\Model\Suppliers');
    }
}
