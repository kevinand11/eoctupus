<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Database\Eloquent\ModelNotFoundException;

Route::post('login', 'UsersController@login');
Route::post('register', 'UsersController@register');
Route::apiResources([
    'articles' => 'ArticlesController',
    'cases' => 'CasesController',
    'centres' => 'CentresController',
    'users' => 'UsersController',
]);


Route::any('/{path}', static function () {
	throw new ModelNotFoundException("Route doesn't exist");
})->where('path', "([A-z\d\/_.\\s]+)?");