<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
Route::get("index", [UserController::class, 'index']);

Route::post("create-user", [UserController::class, 'createUser']);

Route::post("user-login", "UserController@userLogin");

Route::group(['middleware' => 'auth:api'], function () {
    Route::get("user-detail", "UserController@userDetail");
});
