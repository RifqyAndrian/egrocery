<?php

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
    return view('welcome');
});

Route::get('/logout', function () {
    return view('logout');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/account/store', [App\Http\Controllers\UserController::class, 'store'])->name('account.store');

Route::group(['middleware' => ['role:admin']], function (){
    Route::get('/account-admin/store-item', [App\Http\Controllers\ItemController::class, 'create'])->name('create.item');
    Route::post('/account-admin/store-item', [App\Http\Controllers\ItemController::class, 'store'])->name('store.item');
    Route::get('/account-admin', [App\Http\Controllers\UserController::class, 'index'])->name('index.user');
    Route::get('/account-admin/edit-role/{id}', [App\Http\Controllers\UserController::class, 'edit'])->name('edit.user');
    Route::get('/account-admin/{id}', [App\Http\Controllers\UserController::class, 'destroy'])->name('destroy.user');
    Route::put('/account-admin/{id}', [App\Http\Controllers\UserController::class, 'update'])->name('update.user');
});

Route::get('/egrocery/detail-egrocery/{id}', [App\Http\Controllers\ItemController::class, 'show'])->name('show.item');
Route::get('/egrocery/cart', [App\Http\Controllers\OrderController::class, 'index'])->name('index.order');
Route::POST('/egrocery/store-cart', [App\Http\Controllers\OrderController::class, 'store'])->name('store.order');
Route::get('/egrocery/cart/{id}', [App\Http\Controllers\OrderController::class, 'destroy'])->name('destroy.order');
Route::get('/egrocery/cart-submit', [App\Http\Controllers\OrderController::class, 'submit'])->name('submit.order');
Route::get('/egrocery', [App\Http\Controllers\HomeController::class, 'profile'])->name('index.profile');
Route::put('/profile/{id}', [App\Http\Controllers\UserController::class, 'updateprofil'])->name('update.profil');
