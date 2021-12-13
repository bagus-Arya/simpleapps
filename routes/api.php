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

Route::post('register', 'UserController@register');
Route::post('add', 'UserController@addcontact');
Route::post('login', 'UserController@login');
Route::get('list', 'UserController@lists');
Route::post('destroy/{id}', 'UserController@destroy');
Route::post('forgot-password', 'ForgotPasswordController@forgot'); // belum mau

Route::middleware('auth:api')->group(function () {
    Route::get('profile', 'UserController@profile');
    Route::get('logout', 'UserController@logout');
});