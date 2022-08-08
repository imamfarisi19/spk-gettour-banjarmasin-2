<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;

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
Route::post('/kriteria', [GuestController::class, 'kriteria'])->name('kriteria');
Route::post('/hasil', [GuestController::class, 'hasil'])->name('hasil');
Route::get('/detail', [GuestController::class, 'detail'])->name('detail');

Route::get('/login', [AdminController::class, 'login'])->name('login');
Route::post('/postLogin', [AdminController::class, 'postLogin'])->name('postLogin');
Route::get('/logout', [AdminController::class, 'logout'])->name('logout');
Route::get('/kecamatan', [AdminController::class, 'kecamatan'])->name('kecamatan');

Route::group(['middleware' => ['auth']], function () {
    // Route::get('/adminBeranda', [AdminController::class, 'index'])->name('adminBeranda');
    // Route::post('/tempatWisata', [AdminController::class, 'tempatWisata'])->name('tempatWisata');

    Route::get('/kecamatan', [AdminController::class, 'index'])->name('kecamatan');       
    Route::post('/tambahKecamatan', [AdminController::class, 'tambahKecamatan'])->name('tambahKecamatan');
    Route::get('/ubahKecamatan/{id}', [AdminController::class, 'ubahKecamatan'])->name('ubahKecamatan');
    Route::post('/updateKecamatan/{id}', [AdminController::class, 'updateKecamatan'])->name('updateKecamatan');
    Route::get('/hapusKecamatan/{id}', [AdminController::class, 'destroy'])->name('hapusKecamatan');

    Route::get('/kelurahan', [AdminController::class, 'kelurahan'])->name('kelurahan');
});
