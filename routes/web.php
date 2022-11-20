<?php

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
    Route::get('register', [RegisterController::class, 'registerView'])->name('register.view')->middleware('pembeli');
    Route::post('register-process', [RegisterController::class, 'registerProcess'])->name('register.process');

    Route::get('login', [RegisterController::class, 'registerView'])->name('login.view');
});
