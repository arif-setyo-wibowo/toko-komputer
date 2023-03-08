<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PelangganController;
use App\Http\Controllers\Admin\SosmedController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\IdentitasController;
use App\Http\Controllers\Admin\KaryawanController;
use App\Http\Controllers\Admin\SocketController;
use App\Http\Controllers\MotherboardController;
use App\Http\Controllers\ProcessorController;
use App\Http\Controllers\GraphicCardController;
use App\Http\Controllers\MemoryController;
use App\Http\Controllers\PowerSupplyController;
use App\Http\Controllers\StorageController;




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
Route::get('/order/invoice', [OrderController::class, 'detail']);
Route::get('/karyawan', [KaryawanController::class, 'index']);
Route::get('/socket', [SocketController::class, 'index']);
Route::get('/motherboard', [MotherboardController::class, 'index']);
Route::get('/processor', [ProcessorController::class, 'index']);
Route::get('/graphic', [GraphicCardController::class, 'index']);
Route::get('/memory', [MemoryController::class, 'index']);
Route::get('/powersuplly', [PowerSupplyController::class, 'index']);
Route::get('/storage', [StorageController::class, 'index']);


Route::get('/identitas', [IdentitasController::class, 'index'])->name('admin.identitas');
Route::put('/identitas', [IdentitasController::class, 'update']);
 
Route::controller(SosmedController::class)->group(function () {
    Route::get('/sosmed', 'index')->name('admin.sosmed');
    Route::post('/sosmed', 'store');
    Route::get('/sosmed/find/{id}', 'edit');
    Route::post('/sosmed/update', 'update');
    Route::get('/sosmed/delete/{id}', 'destroy');
});

Route::controller(BrandController::class)->group(function () {
    Route::get('/brand', 'index')->name('admin.brand');
    Route::post('/brand', 'store');
    Route::get('/brand/find/{id}', 'edit');
});