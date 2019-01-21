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

Route::post('/register', 'AuthController@register');
Route::post('/login', 'AuthController@login');
Route::get('/user', 'AuthController@user');

Route::resource('employees', 'EmployeeController', ['except' => ['create', 'edit']]) -> middleware('auth:api');
Route::resource('services', 'ServiceController', ['except' => ['create', 'edit']]) -> middleware('auth:api');

