<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;

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



route::get('/',[GuestController::class,'index']);
route::get('soft-delete',[GuestController::class,'softDelete'])->name('soft.delete');
route::get('show-details',[GuestController::class,'showDetails'])->name('show.details');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
