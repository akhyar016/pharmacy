<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Salerecord extends Model
{
    public function medicine()
    {
    	return $this->belongsTo('App\Model\Medicines');
    }
}
