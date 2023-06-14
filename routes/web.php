<?php

use App\Http\Controllers\Admin\Auth\LoginController as AuthLoginController;
use Illuminate\Support\Facades\Route;

// Admin
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\IdentitasController;
use App\Http\Controllers\Admin\SlidersController;
use App\Http\Controllers\Admin\PelangganController;
use App\Http\Controllers\Admin\SosmedController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\SocketController;
use App\Http\Controllers\Admin\MoboController;
use App\Http\Controllers\Admin\MemoriController;
use App\Http\Controllers\Admin\StorageController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\CasingController;
use App\Http\Controllers\Admin\KaryawanController;
use App\Http\Controllers\Admin\PowerSupplyController;
use App\Http\Controllers\Admin\GpuController;
use App\Http\Controllers\Admin\ProcessorController;
use App\Http\Controllers\Admin\EarphoneController;
use App\Http\Controllers\Admin\KeyboardController;
use App\Http\Controllers\Admin\MonitorController;
use App\Http\Controllers\Admin\MouseController;
use App\Http\Controllers\Admin\CoolerController;

//FRONT
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\RakitPcController;
use App\Http\Controllers\Front\CartController;
use App\Http\Controllers\Front\OrdersController;
use App\Http\Controllers\Front\DetailController;
use App\Http\Controllers\Front\ShopController;
use App\Http\Controllers\Front\HistoryController;
use App\Http\Controllers\Front\DetailHistoryController;
use App\Http\Controllers\Front\ProfileController;

use App\Http\Controllers\CustomerController;
// 
use App\Http\Controllers\Auth\SocialiteController;

// API
use App\Http\Controllers\Api\RajaOngkirController;

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
Route::get('/cart', [CartController::class, 'index']);
Route::post('/add-to-cart', [CartController::class, 'addToCart'])->name('add.cart');
Route::post('/add-to-cart-rakit', [CartController::class, 'addToCartRakit']);
Route::post('/remove-from-cart', [CartController::class, 'removeFromCart'])->name('remove.cart');
Route::post('/decrease-quantity', [CartController::class, 'updateCartQuantity'])->name('min.cart');
Route::get('/checkout', [OrdersController::class, 'index'])->name('checkout');
Route::post('/checkout', [OrdersController::class, 'store']);
Route::get('/history', [HistoryController::class, 'index'])->name('history');
Route::get('/detailhistory/{id}', [DetailHistoryController::class, 'index']);

Route::get('/profile', [ProfileController::class, 'index'])->name('profile')->middleware('customer');
Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update')->middleware('customer');
Route::post('/profile/reset', [ProfileController::class, 'reset_pw'])->name('reset_pw')->middleware('customer');

// FRONT PRODUK
Route::get('/detailproduk/{id}', [DetailController::class, 'index']);
Route::get('/shop/{categories}', [ShopController::class, 'index']);

// Login
Route::get('/login', [CustomerController::class, 'login'])->name('login');
Route::post('/login', [CustomerController::class, 'login_data']);
Route::get('/logout', [CustomerController::class, 'logout'])->middleware('customer');
Route::post('/register', [CustomerController::class, 'signup_data'])->name('register');
Route::get('/register/verify/{verify_key}', [CustomerController::class, 'verify']);

//Password
Route::get('/reset', [CustomerController::class, 'reset'])->name('reset');
Route::post('/reset', [CustomerController::class, 'reset_req'])->name('reset_req');
Route::get('/reset/{token}', [CustomerController::class, 'resetPassword'])->name('customer.reset');
Route::post('/reset_password', [CustomerController::class, 'resetPasswordPost'])->name('customer.reset.post');

//Socialite
Route::get('/auth/login/{provider}', [SocialiteController::class, 'redirectToProvider'])->name('login.google');
Route::get('/auth/{provider}/callback', [SocialiteController::class, 'handleProvideCallback']);

// API
Route::get('/provinces', [RajaOngkirController::class, 'getProvinces'])->name('provinces');
Route::get('/cities', [RajaOngkirController::class, 'getCities'])->name('cities');
Route::get('/cities-info', [RajaOngkirController::class, 'getInfoCities'])->name('info.cities');
Route::post('/cost', [RajaOngkirController::class, 'getCost'])->name('cost');

// Blank
Route::get('/blank', [HomeController::class, 'blank'])->name('blank');

// Login Admin
Route::get('/loginEmployee', [AuthLoginController::class, 'index'])->name('login.admin');
Route::post('/loginEmployee', [AuthLoginController::class, 'login']);
Route::get('/logoutEmployee', [AuthLoginController::class, 'logout']);

Route::prefix('administrator')->middleware('karyawan')->group(function () {
    // Dashboard Karyawan
    Route::get('/', [DashboardController::class, 'karyawan'])->name('karyawan');

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
        Route::post('/slider', 'store');
        Route::get('/slider/find/{id}', 'edit');
        Route::post('/slider/update', 'update');
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
        Route::get('/export', 'export')->name('socket.export');
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

    // Cooler
    Route::controller(CoolerController::class)->prefix('/cooler')->group(function () {
        Route::get('/', 'index')->name('administrator.cooler');
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
    Route::controller(EarphoneController::class)->prefix('/earphone')->group(function () {
        Route::get('/', 'index')->name('administrator.earphone');
        Route::post('/', 'store');
        Route::get('/find/{id}', 'edit');
        Route::post('/update', 'update');
        Route::get('/delete/{id}', 'destroy');
    });

    // Keyboard
    Route::controller(KeyboardController::class)->prefix('/keyboard')->group(function () {
        Route::get('/', 'index')->name('administrator.keyboard');
        Route::post('/', 'store');
        Route::get('/find/{id}', 'edit');
        Route::post('/update', 'update');
        Route::get('/delete/{id}', 'destroy');
    });

    // Monitor 
    Route::controller(MonitorController::class)->prefix('/monitor')->group(function () {
        Route::get('/', 'index')->name('administrator.monitor');
        Route::post('/', 'store');
        Route::get('/find/{id}', 'edit');
        Route::post('/update', 'update');
        Route::get('/delete/{id}', 'destroy');
    });
    
    


    // mouse
    Route::controller(MouseController::class)->prefix('/mouse')->group(function () {
        Route::get('/', 'index')->name('administrator.mouse');
        Route::post('/', 'store');
        Route::get('/find/{id}', 'edit');
        Route::post('/update', 'update');
        Route::get('/delete/{id}', 'destroy');
    });

    
});

//Manager
Route::prefix('manager')->middleware('manager')->group(function () {
    // Dashboard Manager
    Route::get('/', [DashboardController::class, 'manager'])->name('manager');

    // Order
    Route::controller(OrderController::class)->prefix('/order')->group(function () {
        Route::get('/', 'index')->name('administrator.order');
        Route::post('/input-resi', 'store');
        Route::get('/invoice/{id}', 'detail');
    });

    // Karyawan
    Route::controller(KaryawanController::class)->prefix('/karyawan')->group(function () {
        Route::get('/', 'index')->name('administrator.karyawan');
        Route::post('/', 'store');
        Route::get('/find/{id}', 'edit');
        Route::post('/update', 'update');
        Route::get('/delete/{id}', 'destroy');
    });

    // Socket
    Route::controller(SocketController::class)->prefix('/socket')->group(function () {
        Route::get('/', 'index')->name('administrator.socket');
        Route::get('/export', 'export')->name('socket.export');
    });

    // Motherboard
    Route::controller(MoboController::class)->prefix('/motherboard')->group(function () {
        Route::get('/', 'index')->name('administrator.mobo');
    });

    // Processor
    Route::controller(ProcessorController::class)->prefix('/processor')->group(function () {
        Route::get('/', 'index')->name('administrator.processor');
    });

    // Grapic Card
    Route::controller(GpuController::class)->prefix('/gpu')->group(function () {
        Route::get('/', 'index')->name('administrator.gpu');
    });

    // Memory
    Route::controller(MemoriController::class)->prefix('/memory')->group(function () {
        Route::get('/', 'index')->name('administrator.memory');
    });

    // Storage
    Route::controller(StorageController::class)->prefix('/storage')->group(function () {
        Route::get('/', 'index')->name('administrator.storage');
    });

    // Power Supply
    Route::controller(PowerSupplyController::class)->prefix('/powersupply')->group(function () {
        Route::get('/', 'index')->name('administrator.powersupply');
    });

    // Cooler
    Route::controller(CoolerController::class)->prefix('/cooler')->group(function () {
        Route::get('/', 'index')->name('administrator.cooler');
    });

    // Casing
    Route::controller(CasingController::class)->prefix('/casing')->group(function () {
        Route::get('/', 'index')->name('administrator.case');
    });

    // Earphone
    Route::controller(EarphoneController::class)->prefix('/earphone')->group(function () {
        Route::get('/', 'index')->name('administrator.earphone');
    });

    // Keyboard
    Route::controller(KeyboardController::class)->prefix('/keyboard')->group(function () {
        Route::get('/', 'index')->name('administrator.keyboard');
    });

    // Monitor 
    Route::controller(MonitorController::class)->prefix('/monitor')->group(function () {
        Route::get('/', 'index')->name('administrator.monitor');
    });

    // mouse
    Route::controller(MouseController::class)->prefix('/mouse')->group(function () {
        Route::get('/', 'index')->name('administrator.mouse');
    });

});