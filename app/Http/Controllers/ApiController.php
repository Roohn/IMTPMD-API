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

	$modules = Date::with('modules')->where('id', '=', $specialcode)->get();
	return $modules;
    }

    public function insertGrade(Request $data) {
      $moduleID = $data->id;
      $module = Module::find($moduleID);
      $module->cijfer = $data->cijfer;
      $module->save();
    }

}
