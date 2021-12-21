<?php

use Illuminate\Http\Request;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ForgotPasswordController;
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

Route::post('/register', [UserController::class, 'register']);
Route::post('/add', [UserController::class, 'addcontact']);
Route::post('/login', [UserController::class, 'login']);
Route::put('/contact/{id}', [UserController::class, 'updates']);
Route::post('/destroy/{id}', [UserController::class, 'destroy']);
Route::post('/forgot-password', [ForgotPasswordController::class, 'forgot']);

Route::middleware('auth:api', 'throttle:60,1')->group(function () {
    Route::get('/home', [UserController::class, 'profile']);
    Route::get('/logout', 'UserController@logout');
});