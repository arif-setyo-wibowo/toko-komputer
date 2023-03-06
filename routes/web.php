<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PelangganController;
use App\Http\Controllers\Admin\SosmedController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\IdentitasController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\SocketController;
use App\Http\Controllers\MotherboardController;
use App\Http\Controllers\ProcessorController;
use App\Http\Controllers\GraphicCardController;
use App\Http\Controllers\MemoryController;
use App\Http\Controllers\PowerSupplyController;


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
Route::get('/sosmed', [SosmedController::class, 'index']);
Route::get('/brand', [BrandController::class, 'index']);
Route::get('/order', [OrderController::class, 'index']);
Route::get('/order/invoice', [OrderController::class, 'detail']);
Route::get('/identitas', [IdentitasController::class, 'index']);
Route::get('/user', [UserController::class, 'index']);
Route::get('/socket', [SocketController::class, 'index']);
Route::get('/motherboard', [MotherboardController::class, 'index']);
Route::get('/processor', [ProcessorController::class, 'index']);
Route::get('/graphic', [GraphicCardController::class, 'index']);
Route::get('/memory', [MemoryController::class, 'index']);
Route::get('/powersuplly', [PowerSupplyController::class, 'index']);





