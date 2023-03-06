<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PelangganController;
use App\Http\Controllers\Admin\SosmedController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\IdentitasController;

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

Route::get('/', [DashboardController::class, 'index']);
Route::get('/pelanggan', [PelangganController::class, 'index']);
Route::get('/brand', [BrandController::class, 'index']);
Route::get('/order', [OrderController::class, 'index']);

Route::get('/identitas', [IdentitasController::class, 'index'])->name('admin.identitas');
Route::put('/identitas', [IdentitasController::class, 'update']);
 
Route::controller(SosmedController::class)->group(function () {
    Route::get('/sosmed', 'index')->name('admin.sosmed');
    Route::post('/sosmed', 'store');
    Route::get('/sosmed/delete/{id}', 'destroy');
});