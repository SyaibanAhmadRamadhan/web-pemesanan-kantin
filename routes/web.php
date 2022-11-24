<?php

use App\Http\Controllers\DetailPesananController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/')->group(function () {
    Route::get('/', [MenuController::class, 'menuView'])->name('menu.view');

    Route::get('register', [RegisterController::class, 'registerView'])->name('register.view')->middleware('guest');
    Route::post('register-process', [RegisterController::class, 'registerProcess'])->name('register.process');

    Route::get('login', [LoginController::class, 'loginView'])->name('login.view')->middleware('guest');
    Route::post('login-process', [LoginController::class, 'loginProcess'])->name('login.process');

    Route::get('logout', [LoginController::class, 'logout'])->name('logout');

    Route::get('profile', [ProfileController::class, 'profileView'])->name('profile.view')->middleware('pembeli');
    Route::put('profile-process', [ProfileController::class, 'profileEditProcess'])->name('profile.edit.proccess')->middleware('pembeli');

    Route::post('pemesanan-process', [MenuController::class, 'pemesananProcess'])->name('pemesanan.process');
    Route::post('pemesanan-session', [MenuController::class, 'pemesananSession'])->name('pemesanan.session');
    Route::get('search', [MenuController::class, 'searchView'])->name('search.view');

    Route::get('detail-pesanan', [DetailPesananController::class, 'detailPesananView'])->name('detail.pesanan.view')->middleware('pembeli');

    // https://www.figma.com/file/iqGXLhny8ZVCKlcG8AzAev/Rancangan-Antarmuka?node-id=17%3A238
});
