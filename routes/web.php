<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\AdminController;

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

Route::get('/', [GuestController::class, 'index'])->name('/');


Route::get('/adminLogin', [AdminController::class, 'login'])->name('adminLogin');
Route::post('/postLogin', [AdminController::class, 'postLogin'])->name('postLogin');
Route::get('/adminBeranda', [AdminController::class, 'index'])->name('adminBeranda');
Route::get('/adminLogout', [AdminController::class, 'logout'])->name('adminLogout');