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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('login', 'App\Http\Controllers\API\UserController@login');

Route::group(['middleware' => ['auth:sanctum']], function() {

    Route::get('index', 'App\Http\Controllers\API\ReserveController@index');
    Route::get('lessons', 'App\Http\Controllers\API\ReserveController@getLessons');
    Route::post('new-reserve', 'App\Http\Controllers\API\ReserveController@store');

    Route::get('profile', 'App\Http\Controllers\API\UserController@profile');
    Route::post('log-out', 'App\Http\Controllers\API\UserController@logOut');
});
