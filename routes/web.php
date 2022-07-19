<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function() {
    return view('hello');
})->name('hello');

Route::controller(RegistrationController::class)->name('reg.')->group(function() {
    Route::get('/register', 'create')->name('create');
    Route::post('register', 'store')->name('store');
});

Route::controller(SessionsController::class)->name('sess.')->group(function() {
    Route::get('/login', 'create')->name('create');
    Route::post('login', 'store')->name('store');
    Route::get('/logout', 'destroy')->name('destroy');
});

Route::get('/join-workshop', [WorkshopController::class, 'join']);

Route::get('/join-workshop', function() {
    return view('workshops.join_workshop');
})->middleware('auth');