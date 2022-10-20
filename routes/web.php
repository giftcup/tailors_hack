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
    return view('dummy_page');
})->name('hello')->middleware('auth');;

Route::controller(RegistrationController::class)
    ->name('reg.')
    ->group(function () {
        Route::get('/register', 'create')->name('create');
        Route::post('register', 'store')->name('store');
    });

Route::controller(SessionsController::class)
    ->name('sess.')
    ->group(function () {
        Route::get('/login', 'create')->name('create');
        Route::post('login', 'store')->name('store');
        Route::get('/logout', 'destroy')->name('destroy');
    });

Route::resource('workshop', WorkshopController::class)
    ->middleware('auth')
    ->except(['index'])
    ->names([
        'create' => 'workshop.create',
        'store' => 'workshop.store'
    ]);


Route::controller(UserController::class)->name('tailor.')
    ->middleware('auth')
    ->group(function () {
    Route::get('/workshop', 'joinWorkshop')->name('join');
    Route::post('workshop/join', 'storeWorkshop')->name('workshop');
    Route::get('/profile', 'profile')->name('profile');
    Route::get('/profile/edit', 'editProfileView')->name('profile.edit.view');
    Route::post('profile/edit', 'editProfile')->name('profile.edit');
});

/** 
 *  /bessem-works-magic
 *  /bessem-works-magic/customer-name/#OrDerNum
 */
Route::controller(CustomerController::class)->name('cust.')
    ->middleware('auth')
    ->group(function () {
        Route::get('/customers/add', 'create')->name('create');
        Route::post('customers/add', 'store')->name('store');
        Route::get('customers', 'customers')->name('all');
        Route::get('customers/{customerName}', 'customerInfo')->name('info');
    });

Route::controller(OrderController::class)->name('ord.')
    ->middleware('auth')
    ->group(function() {
        Route::get('/{customerName}/orders/new', 'create')->name('create');
        Route::post('{customerName}/orders/new', 'store')->name('store');
        Route::get('/{customerName}/orders', 'orders')->name('cust');
        Route::get('/{customerName}/orders/{orderNum}', 'orderDetails')->name('details');
        Route::post('orders/{orderNum}', 'changeCompletionState')->name('change');
        Route::post('{customerName}/orders/{orderNum}', 'deleteOrder')->name('delete');
        Route::get('/orders', 'workshopOrders')->name('workshop');
    });

// Route::get('/workshop_name/contact/order/add2', function() {
//     return view('orders.info_order');
// });
