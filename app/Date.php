<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Date extends Model
{
    public function modules() {
	return $this->belongsToMany('App\Module');
    }
}
