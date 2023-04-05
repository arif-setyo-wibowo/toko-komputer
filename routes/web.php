<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\IdentitasController;
use App\Http\Controllers\Admin\PelangganController;
use App\Http\Controllers\Admin\SosmedController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\SocketController;
use App\Http\Controllers\Admin\MoboController;
use App\Http\Controllers\Admin\ProsesorController;
use App\Http\Controllers\Admin\MemoriController;
use App\Http\Controllers\Admin\StorageController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\CasingController;
use App\Http\Controllers\Admin\KaryawanController;
use App\Http\Controllers\Admin\PowerSupplyController;
use App\Http\Controllers\Admin\GpuController;
use App\Http\Controllers\Admin\ProcessorController;
use App\Http\Controllers\GraphicCardController;
use App\Http\Controllers\ComputerCaseController;
use App\Http\Controllers\EarphoneController;
use App\Http\Controllers\KeyboardController;
use App\Http\Controllers\MonitorController;
//FRONT
use App\Http\Controllers\Front\HomeController;

// 
use App\Http\Controllers\TestController;

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
Route::get('/earphone', [EarphoneController::class, 'index']);
Route::get('/keyboard', [KeyboardController::class, 'index']);
Route::get('/monitor', [MonitorController::class, 'index']);

// FRONT
Route::get('/home', [HomeController::class, 'index']);

// TEST
Route::get('/paymentgateway', [TestController::class, 'index']);
Route::post('/paymentgateway/bayar', [TestController::class, 'store']);
Route::post('/paymentgateway/bayarmidtrans', [TestController::class, 'midtrans']);
Route::get('/paymentgateway/detail/{refesensi}', [TestController::class, 'show'])->name('paymentgateway.detail');

Route::controller(IdentitasController::class)->prefix('/identitas')->group(function () {
    Route::get('/', 'index')->name('admin.identitas');
    Route::put('/', 'update');
    Route::post('/', 'store');
});
 
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
    Route::post('/brand/update', 'update');
    Route::get('/brand/delete/{id}', 'destroy');
});

Route::controller(SocketController::class)->prefix('/socket')->group(function () {
    Route::get('/', 'index')->name('admin.socket');
    Route::post('/', 'store');
    Route::get('/find/{id}', 'edit');
    Route::post('/update', 'update');
    Route::get('/delete/{id}', 'destroy');
});

Route::controller(MoboController::class)->prefix('/motherboard')->group(function () {
    Route::get('/', 'index')->name('admin.mobo');
    Route::post('/', 'store');
    Route::get('/find/{id}', 'edit');
    Route::post('/update', 'update');
    Route::get('/delete/{id}', 'destroy');
});

Route::controller(MemoriController::class)->prefix('/memory')->group(function () {
    Route::get('/', 'index')->name('admin.memory');
    Route::post('/', 'store');
    Route::get('/find/{id}', 'edit');
    Route::post('/update', 'update');
    Route::get('/delete/{id}', 'destroy');
});

Route::controller(StorageController::class)->prefix('/storage')->group(function () {
    Route::get('/', 'index')->name('admin.storage');
    Route::post('/', 'store');
    Route::get('/find/{id}', 'edit');
    Route::post('/update', 'update');
    Route::get('/delete/{id}', 'destroy');
});

Route::controller(CasingController::class)->prefix('/casing')->group(function () {
    Route::get('/', 'index')->name('admin.case');
    Route::post('/', 'store');
    Route::get('/find/{id}', 'edit');
    Route::post('/update', 'update');
    Route::get('/delete/{id}', 'destroy');
});

Route::controller(PowerSupplyController::class)->prefix('/powersupply')->group(function () {
    Route::get('/', 'index')->name('admin.powersupply');
    Route::post('/', 'store');
    Route::get('/find/{id}', 'edit');
    Route::post('/update', 'update');
    Route::get('/delete/{id}', 'destroy');
});

Route::controller(GpuController::class)->prefix('/gpu')->group(function () {
    Route::get('/', 'index')->name('admin.gpu');
    Route::post('/', 'store');
    Route::get('/find/{id}', 'edit');
    Route::post('/update', 'update');
    Route::get('/delete/{id}', 'destroy');
});

Route::controller(ProcessorController::class)->prefix('/processor')->group(function () {
    Route::get('/', 'index')->name('admin.processor');
    Route::post('/', 'store');
    Route::get('/find/{id}', 'edit');
    Route::post('/update', 'update');
    Route::get('/delete/{id}', 'destroy');
});


