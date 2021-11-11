<?php

use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\Auth\AdminAuthenticatedSessionController;
use App\Http\Controllers\Penjual\Auth\PenjualAuthenticatedSessionController;
use App\Http\Controllers\Penjual\PenjualHomeController;
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
})->name('home');


Route::get('/dashboard', fn() => view('dashboard'))->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';

// Penjual
Route::namespace('Penjual')->name('penjual.')->prefix('penjual')->group(function(){
    Route::namespace('Auth')->middleware('guest:penjual')->group(function(){
        // login route
        Route::get('login',[PenjualAuthenticatedSessionController::class,'create'])->name('login'); 
        Route::post('login',[PenjualAuthenticatedSessionController::class,'store'])->name('penjuallogin');
    });
    Route::namespace('penjual')->post('logout',[PenjualAuthenticatedSessionController::class,'destroy'])->name('logout');
    Route::middleware('penjual')->group(function(){
        Route::get('dashboard',[PenjualHomeController::class,'index'])->name('dashboard');
    });
});

// Admin
Route::namespace('Admin')->name('admin.')->prefix('admin')->group(function(){
    Route::namespace('Auth')->middleware('guest:admin')->group(function(){
        Route::get('login',[AdminAuthenticatedSessionController::class,'create'])->name('login'); 
        Route::post('login',[AdminAuthenticatedSessionController::class,'store'])->name('adminlogin');
    });
    Route::namespace('admin')->post('logout',[AdminAuthenticatedSessionController::class,'destroy'])->name('logout');
    Route::middleware('admin')->group(function(){
        Route::get('dashboard',[AdminHomeController::class,'index'])->name('dashboard');
    });
});