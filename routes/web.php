<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Database\Eloquent\ModelNotFoundException;

Route::get('/', function () {
    return response()->file(public_path('build/index.html'));
});

Route::match(
	['HEAD', 'POST', 'PUT', 'PATCH', 'DELETE', 'OPTIONS'],
	'/{path}', static function(){
		throw new ModelNotFoundException("Route doesn't exist");
})->where('path','([A-z\d\/_.\\s]+)?');
