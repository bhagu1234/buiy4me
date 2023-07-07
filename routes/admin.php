<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TripController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CountryController;
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

Route::get('/admin',[AdminController::class,"index"])->name('admin.index');

// UserController ===============
Route::get('/admin-user',[UserController::class,"index"])->name('admin.user_index');
Route::get('/admin-user_create',[UserController::class,"Create"])->name('admin.user_Create');
Route::post('/admin-user_Store',[UserController::class,"Store"])->name('admin.user_Store');
Route::get('/admin-user_edit/{id}',[UserController::class,"edit"])->name('admin.user_edit');
Route::post('/admin/user_update',[UserController::class,"update"])->name('admin.user_update');
Route::get('/admin/user_delete/{id}',[UserController::class,"delete"])->name('admin.user_delete');

// TripController=========================
Route::get('/admin-trip',[TripController::class,"index"])->name('admin.trip_index');

// OrderController==============================
Route::get('/admin-order',[OrderController::class,"index"])->name('admin.order_index');

// CountryController=======================================================
Route::get('/admin-create_country',[CountryController::class,"create"])->name('admin.create_country');
Route::post('/admin-store_country',[CountryController::class,"store"])->name('admin.store_country');
Route::get('/admin-fatch_country',[CountryController::class,"fatch_country"])->name('admin.fatch_country');
Route::get('/admin-delete_country/{id}',[CountryController::class,"delete_country"])->name('admin.delete_country');
Route::get('/admin-index_country',[CountryController::class,"index"])->name('admin.index_country');