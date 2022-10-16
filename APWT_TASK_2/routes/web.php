<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

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

Route::get('/login', [CustomerController::class,'login']);
Route::post('/login', [CustomerController::class,'loginValidate']);
Route::get('/registration', [CustomerController::class,'reg']);
Route::post('/registration', [CustomerController::class,'regValidate']);
Route::get('/contact', [CustomerController::class,'contact']);
Route::post('/contact', [CustomerController::class,'contactValidate']);
