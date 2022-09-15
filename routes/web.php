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

Route::get('/', function () {
    return view('hello');
})->name('hello');

// Route::controller(RegistrationController::class)
//     ->name('reg.')
//     ->middleware('guest')
//     ->group(function () {
//         Route::get('/register', 'create')->name('create');
//         Route::post('register', 'store')->name('store');
//     });

Route::controller(SessionsController::class)
    ->name('sess.')
    ->middleware('guest')
    ->group(function () {
        Route::get('/login', 'create')->name('create');
        Route::post('login', 'store')->name('store');
        Route::get('/logout', 'destroy')->name('destroy');
    });

Route::resource('workshop', WorkshopController::class)
    ->except(['index'])
    ->names([
        'create' => 'workshop.create',
        'store' => 'workshop.store'
    ])
    ->middleware('auth');


Route::controller(UserController::class)->name('tailor.')->group(function () {
    Route::get('/workshop', 'joinWorkshop')->name('join');
    Route::post('workshop/join', 'storeWorkshop')->name('workshop');
});


Route::get('/workshop_name/contacts', function() {
    return view('contacts.show_contacts');
});

Route::get('/workshop_name/contacts/info', function() {
    return view('contacts.info_contact');
});

Route::get('/workshop_name/contacts/add', function() {
    return view('contacts.add_contact');
});

Route::get('/workshop_name/contact/order/add', function() {
    return view('orders.add_order');
});