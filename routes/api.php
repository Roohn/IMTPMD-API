<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/modules', function (Request $request) {
    return DB::table('modules')->get();
});

Route::get('/modules/year/{year}/semester/{semester}', function ($year, $semester) {
    return DB::table('modules')->where([
        ['year', '=', $year],
        ['semester', '=', $semester],
    ])->get();
});
