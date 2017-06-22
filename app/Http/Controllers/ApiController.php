<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\Module;
use App\Date;
class ApiController extends Controller
{
    public function getModules($year, $semester) {
	$specialcode = $year * 4 - 4 + $semester;

	$modules = Date::find($specialcode)->modules()->get();
	return $modules;
    }

    public function insertGrade() {
      $moduleID = Input::get('id');
      $module = Module::find($moduleID);
      $module->grade = Input::get('grade');
      $module->save();
    }

}
