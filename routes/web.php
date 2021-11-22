<?php

use App\Http\Controllers\Admin\AdminAppController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\Auth\AdminAuthenticatedSessionController;
use App\Http\Controllers\Penjual\Auth\PenjualAuthenticatedSessionController;
use App\Http\Controllers\Penjual\PenjualAppController;
use App\Http\Controllers\Penjual\PenjualHomeController;
use App\Http\Controllers\UserController;
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
Route::middleware(['auth','verified'])->group(function(){
    Route::get('/dashboard',[UserController::class,'dashboard'])->name('dashboard');
    Route::get('/beli/{buku:id}',[UserController::class,'belisekarang'])->name('belisekarang');
    Route::post('/buy/{buku:id}',[UserController::class,'buynow'])->name('buynow');
    Route::get('/view',[UserController::class,'detail'])->name('detail.buku');
    Route::get('/buku/kategori/{kategori:id}',[UserController::class,'listkategori'])->name('listkategori');
    Route::post('/buku/search',[UserController::class,'searchbuku'])->name('searchbuku');
    Route::get('/buku',[UserController::class,'allbuku'])->name('listbuku');
    Route::get('/addwhistlist/{buku:id}',[UserController::class,'whistlist'])->name('whistlist');
    Route::get('/unwhistlist/{buku:id}',[UserController::class,'unwhistlist'])->name('unwhistlist');
    Route::get('/whistlist',[UserController::class,'listwhistlist'])->name('listwhistlist');
});
Route::get('/view',[UserController::class,'detail'])->name('detail.buku');
Route::get('/search',[UserController::class,'search'])->name('search');
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
        Route::get('buku',[PenjualAppController::class,'listbuku'])->name('listbuku');
        Route::get('buku/tambah',[PenjualAppController::class,'tambahbuku'])->name('tambahbuku');
        Route::post('buku/insert',[PenjualAppController::class,'insertbuku'])->name('insertbuku');
        Route::get('buku/edit/{buku}',[PenjualAppController::class,'editbuku'])->name('editbuku');
        Route::patch('buku/update/{buku:id}',[PenjualAppController::class,'updatebuku'])->name('updatebuku');
        Route::delete('buku/delete/{buku:id}',[PenjualAppController::class,'deletebuku'])->name('deletebuku');
        Route::get('listbuy',[PenjualAppController::class,'listbuy'])->name('listbuy');
        Route::get('listbuy/konfirmasi/{buy:id}',[PenjualAppController::class,'konfirmasi'])->name('konfirmasi.listbuy');
        Route::get('listbuy/unkonfirmasi/{buy:id}',[PenjualAppController::class,'unkonfirmasi'])->name('unkonfirmasi.listbuy');
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
        Route::get('penjual',[AdminAppController::class,'listpenjual'])->name('listpenjual');
        Route::get('penjual/tambah',[AdminAppController::class,'tambahpenjual'])->name('tambahpenjual');
        Route::post('penjual/insert',[AdminAppController::class,'insertpenjual'])->name('insertpenjual');
        Route::get('penjual/edit/{penjual:id}',[AdminAppController::class,'editpenjual'])->name('editpenjual');
        Route::patch('penjual/update/{penjual:id}',[AdminAppController::class,'updatepenjual'])->name('updatepenjual');
        Route::delete('penjual/delete/{penjual:id}',[AdminAppController::class,'deletepenjual'])->name('hapuspenjual');
        Route::get('user',[AdminAppController::class,'listuser'])->name('listuser');
        Route::Delete('user/delete/{user:id}',[AdminAppController::class,'deleteuser'])->name('deleteuser');
        Route::get('user/detail/{user:id}',[AdminAppController::class,'detailuser'])->name('detailuser');
        Route::get('listbuku/',[AdminAppController::class,'listbuku'])->name('listbuku');
    });
});