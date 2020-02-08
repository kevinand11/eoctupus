<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Database\Eloquent\ModelNotFoundException;

Route::get('/', function () {
    return view('welcome');
});

Route::match(
	['HEAD', 'POST', 'PUT', 'PATCH', 'DELETE', 'OPTIONS'],
	'/{path}', static function(){
		throw new ModelNotFoundException("Route doesn't exist");
})->where('path','([A-z\d\/_.\\s]+)?');
