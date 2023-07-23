<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PembelianController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\StorebeliController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::resource('product', ProductController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

Route::get('/beli/{id}', [PembelianController::class, 'beli'])->name('beli')->middleware('auth');

Route::put('/pembayaran/{id}', [PembayaranController::class, 'pembayaran'])->name('pembayaran')->middleware('auth');

Route::get('/admin', [AdminController::class, 'admin'])->name('admin');

Route::resource('users', UserController::class);

// Route untuk menampilkan form edit user
Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');

// Route untuk mengupdate data user
Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');


Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
