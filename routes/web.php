<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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


// Homepage Routes
Route::get('/', [HomeController::class, 'index']);
Route::get('/Le-Luxe/Our-Services', [HomeController::class, 'services']);
Route::get('/Le-Luxe/Contact-us', [HomeController::class, 'contact_us']);
Route::get('/Le-Luxe/Book-Appointment', [HomeController::class, 'book']);


// Admin Routes
Route::get('/dashboard', [AdminController::class, 'dashboard']);
Route::get('/product', [AdminController::class, 'product']);