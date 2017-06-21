<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    public $incrementing = false;

    public function dates() {
	return $this->belongsToMany('App\Date');
    }
}
