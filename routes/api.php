<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Database\Eloquent\ModelNotFoundException;

Route::get('user', 'HooksController@user');
Route::post('message', 'HooksController@message');
Route::post('call', 'AuthController@call');
Route::post('login', 'AuthController@login');
Route::post('register', 'AuthController@register');
Route::apiResources([
    'articles' => 'ArticlesController',
    'reports' => 'ReportsController',
    'centres' => 'CentresController',
    'users' => 'UsersController',
]);


Route::any('/{path}', static function () {
	throw new ModelNotFoundException("Route doesn't exist");
})->where('path', "([A-z\d\/_.\\s]+)?");