<?php
use taskapp\Tarea;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/{tarea}', function ( taskapp\Tarea $tarea) {
	// $tarea = Tarea::whereSlug($slug)->first();
    return view('welcome',['tarea' => $tarea]);
});
