<?php

namespace App\Http\Controllers;

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

// $version = 'v1';
// $locale = app()->getLocale();


// Route::group(['prefix' => $version], function () use ($locale) {
//     Route::group(['prefix' => '{locale}', 'where' => ['locale' => '[a-zA-Z]{2}'], 'middleware' => ['api', 'setLocale']], function () {

//         // Authentication
//         Route::group(['prefix' => 'auth'], function ($router) {
//             Route::post('register', [AuthController::class, 'register']);
//             Route::post('login', [AuthController::class, 'login']);
//             Route::post('logout', [AuthController::class, 'logout']);
//             Route::post('refresh', [AuthController::class, 'refresh']);
//             Route::post('me', [AuthController::class, 'me']);
//         });
//     });
// });


Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('register', [AuthController::class, 'register']);
    Route::post('login', [AuthController::class, 'login']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('refresh', [AuthController::class, 'refresh']);
    Route::post('me', [AuthController::class, 'me']);

});