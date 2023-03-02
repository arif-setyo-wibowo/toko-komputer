<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PelangganController;
use App\Http\Controllers\Admin\SosmedController;


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

<<<<<<< HEAD
Route::get('/', function () {
    return view('admin/dashboard');
});

Route::get('/pelanggan', function () {
    return view('admin/pelanggan');
    
});

Route::get('/sosmed', function () {
    return view('admin/sosmed');
    
});

Route::get('/brand', function () {
    return view('admin/brand');
    
});
=======
Route::get('/', [DashboardController::class, 'index']);
Route::get('/pelanggan', [PelangganController::class, 'index']);
Route::get('/sosmed', [SosmedController::class, 'index']);
>>>>>>> b2084f0a21a9636d7a66f1a81609dd9e93739caa
