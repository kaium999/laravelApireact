<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('register','App\Http\Controllers\UserController@register');
Route::get('datashow','App\Http\Controllers\UserController@Showdata');
Route::delete('delete/{id}','App\Http\Controllers\UserController@deleteuser');
Route::get('edit/{id}','App\Http\Controllers\UserController@editShow');
Route::put('update/{id}','App\Http\Controllers\userController@update');
