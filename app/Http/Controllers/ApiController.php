<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Module;
use App\Date;
class ApiController extends Controller
{
    public function getModules($year, $semester) {
	$specialcode = $year * 4 - 4 + $semester;
	
	$modules = Date::find($specialcode)->modules()->get();
	return $modules;
    }

}
