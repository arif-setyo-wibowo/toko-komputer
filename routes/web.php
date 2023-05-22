<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\IdentitasController;
use App\Http\Controllers\Admin\SlidersController;
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
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\ProcessorController;
use App\Http\Controllers\GraphicCardController;
use App\Http\Controllers\ComputerCaseController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CustomxamerController;
use App\Http\Controllers\EarphoneController;
use App\Http\Controllers\KeyboardController;
use App\Http\Controllers\MonitorController;

//FRONT
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\RakitPcController;
use App\Http\Controllers\Front\DetailProdukController;
use App\Http\Controllers\Front\CartController;
use App\Http\Controllers\Front\ShopController;

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

// FRONT
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/rakitpc', [RakitPcController::class, 'index']);
Route::get('/detailproduk', [DetailProdukController::class, 'index']);
Route::get('/cart', [CartController::class, 'index']);
Route::get('/shop', [ShopController::class, 'index']);


// ADMIN

// Dashboard
Route::get('/administrator', [DashboardController::class, 'index']);

Route::prefix('administrator')->group(function () {
    
    // Identitas
    Route::controller(IdentitasController::class)->prefix('/identitas')->group(function () {
        Route::get('/', 'index')->name('administrator.identitas');
        Route::put('/', 'update');
        Route::post('/', 'store');
    });

    // Pelanggan
    Route::get('/pelanggan', [PelangganController::class, 'index']);

    // Sosial Media
    Route::controller(SosmedController::class)->group(function () {
        Route::get('/sosmed', 'index')->name('administrator.sosmed');
        Route::post('/sosmed', 'store');
        Route::get('/sosmed/find/{id}', 'edit');
        Route::post('/sosmed/update', 'update');
        Route::get('/sosmed/delete/{id}', 'destroy');
    });

    // Sliders
    Route::controller(SlidersController::class)->group(function () {
        Route::get('/slider', 'index')->name('administrator.slider');
    });
    
    // Brand
    Route::controller(BrandController::class)->group(function () {
        Route::get('/brand', 'index')->name('administrator.brand');
        Route::post('/brand', 'store');
        Route::get('/brand/find/{id}', 'edit');
        Route::post('/brand/update', 'update');
        Route::get('/brand/delete/{id}', 'destroy');
    });

    // Socket
    Route::controller(SocketController::class)->prefix('/socket')->group(function () {
        Route::get('/', 'index')->name('administrator.socket');
        Route::post('/', 'store');
        Route::get('/find/{id}', 'edit');
        Route::post('/update', 'update');
        Route::get('/delete/{id}', 'destroy');
        Route::get('/export','export')->name('socket.export');
    });
    
    // Motherboard
    Route::controller(MoboController::class)->prefix('/motherboard')->group(function () {
        Route::get('/', 'index')->name('administrator.mobo');
        Route::post('/', 'store');
        Route::get('/find/{id}', 'edit');
        Route::post('/update', 'update');
        Route::get('/delete/{id}', 'destroy');
    });

    // Processor
    Route::controller(ProcessorController::class)->prefix('/processor')->group(function () {
        Route::get('/', 'index')->name('administrator.processor');
        Route::post('/', 'store');
        Route::get('/find/{id}', 'edit');
        Route::post('/update', 'update');
        Route::get('/delete/{id}', 'destroy');
    });

    // Grapic Card
    Route::controller(GpuController::class)->prefix('/gpu')->group(function () {
        Route::get('/', 'index')->name('administrator.gpu');
        Route::post('/', 'store');
        Route::get('/find/{id}', 'edit');
        Route::post('/update', 'update');
        Route::get('/delete/{id}', 'destroy');
    });
    
    // Memory
    Route::controller(MemoriController::class)->prefix('/memory')->group(function () {
        Route::get('/', 'index')->name('administrator.memory');
        Route::post('/', 'store');
        Route::get('/find/{id}', 'edit');
        Route::post('/update', 'update');
        Route::get('/delete/{id}', 'destroy');
    });
    
    // Storage
    Route::controller(StorageController::class)->prefix('/storage')->group(function () {
        Route::get('/', 'index')->name('administrator.storage');
        Route::post('/', 'store');
        Route::get('/find/{id}', 'edit');
        Route::post('/update', 'update');
        Route::get('/delete/{id}', 'destroy');
    });

    // Power Supply
    Route::controller(PowerSupplyController::class)->prefix('/powersupply')->group(function () {
        Route::get('/', 'index')->name('administrator.powersupply');
        Route::post('/', 'store');
        Route::get('/find/{id}', 'edit');
        Route::post('/update', 'update');
        Route::get('/delete/{id}', 'destroy');
    });
    
    // Casing
    Route::controller(CasingController::class)->prefix('/casing')->group(function () {
        Route::get('/', 'index')->name('administrator.case');
        Route::post('/', 'store');
        Route::get('/find/{id}', 'edit');
        Route::post('/update', 'update');
        Route::get('/delete/{id}', 'destroy');
    });

    // Earphone
    Route::get('/earphone', [EarphoneController::class, 'index']);
    
    // Keyboard
    Route::get('/keyboard', [KeyboardController::class, 'index']);
    
    // Monitor
    Route::get('/monitor', [MonitorController::class, 'index']);

    // Order
    Route::controller(OrderController::class)->prefix('/order')->group(function () {
        Route::get('/', 'index');
        Route::get('/invoice', 'detail');
    });

    // Karyawan
    Route::get('/karyawan', [KaryawanController::class, 'index']);

    // Test Midtrans + add to cart
    //Route::get('/paymentgateway', [TestController::class, 'index'])->middleware('customer');
    Route::controller(TestController::class)->prefix('/paymentgateway')->group(function () {
        Route::get('/', 'index')->name('paymentgateway.index');
        Route::post('/bayar', 'store');
        Route::post('/bayarmidtrans', 'midtrans');
        Route::get('/detail/{refesensi}', 'show');
    });
    Route::post('/cart/add', [TestController::class, 'addToCart'])->name('cart.add');

    // Test Login
    Route::get('/logintest', [CustomerController::class, 'login'])->name('admin.login');
    Route::post('/logintest', [CustomerController::class, 'login_data']);
    Route::get('/logout', [CustomerController::class, 'logout'])->middleware('customer');
    Route::get('/registertest', [CustomerController::class, 'signup']);
    Route::post('/registertest', [CustomerController::class, 'signup_data']);
    Route::get('/registertest/verify/{verify_key}', [CustomerController::class, 'verify']);
});