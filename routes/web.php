<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/home', [HomeController::class, 'home']);
Route::get('category/foodbaverage',[ProductController::class,'foodbeverage']);
Route::get('category/beautyhealty',[ProductController::class,'beautyhealty']);
Route::get('category/homecare',[ProductController::class,'homecare']);
Route::get('category/babykid',[ProductController::class,'babykid']);

Route::get('/user/{id}/name/{name}', [UserController::class, 'show']);

Route::get('/sale', [SaleController::class, 'index'])->name('sale.index');