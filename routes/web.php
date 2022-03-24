<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\KasirController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

// manager
Route::resource('menu', ManagerController::class);
Route::get('laporan', [ManagerController::class, 'laporan'])->name('laporan');
Route::get('carimanager', [ManagerController::class, 'cari'])->name('carimanager');

// admin
Route::resource('admin', AdminController::class);

// kasir
Route::resource('kasir', KasirController::class);
