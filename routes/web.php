<?php

use App\Http\Controllers\Admin\AdminAppController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\Auth\AdminAuthenticatedSessionController;
use App\Http\Controllers\PenerbitController;
use App\Http\Controllers\Penjual\Auth\PenjualAuthenticatedSessionController;
use App\Http\Controllers\Penjual\PenjualAppController;
use App\Http\Controllers\Penjual\PenjualHomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/',[UserController::class,'welcome'])->name('welcome');
Route::middleware(['auth','verified'])->group(function(){
    Route::get('/beli/{buku:id}',[UserController::class,'belisekarang'])->name('belisekarang');
    Route::post('/buy/{buku:id}',[UserController::class,'buynow'])->name('buynow');
    Route::get('/addwhistlist/{buku:id}',[UserController::class,'whistlist'])->name('whistlist');
    Route::get('/unwhistlist/{buku:id}',[UserController::class,'unwhistlist'])->name('unwhistlist');
    Route::get('/wishlist',[UserController::class,'listwhistlist'])->name('listwhistlist');
    Route::get('/update-profile', [UserController::class, 'updateProfile'])->name('update.profile');
    Route::post('/update-profil/{user:id}', [UserController::class, 'updateProfil'])->name('update.profil');
    Route::get('/change-password', [UserController::class, 'changePassword'])->name('change.password');
    Route::post('/ubah-password/{user:id}', [UserController::class, 'ubahPassword'])->name('ubah.password');
    Route::get('/my-orders', [UserController::class, 'myOrders'])->name('my.orders');
    Route::get('/my-book', [UserController::class, 'myBook'])->name('listmybook');
    Route::get('/read-book/{buku:id}', [UserController::class, 'lihatbuku'])->name('lihatbuku');
});
Route::get('pelayanan/',[UserController::class,'pagePelayanan'])->name('page.pelayanan');
Route::get('progress/',[PenerbitController::class,'pageProgress'])->name('page.progress');
Route::get('progress/download/{progress:id}',[PenerbitController::class,'downloadProgress'])->name('page.progress.download');
Route::get('progress/search',[PenerbitController::class,'searchProgress'])->name('cari.progress');
Route::get('/buku/kategori/{kategori:id}',[UserController::class,'listkategori'])->name('listkategori');
Route::get('/daftar-menerbitkan',[PenerbitController::class,'index'])->name('daftar.menerbitkan');
Route::get('/form-penerbit',[PenerbitController::class,'formPenerbit'])->name('form.penerbit');
Route::post('/submit-penerbit',[PenerbitController::class,'submitPenerbit'])->name('submit.penerbit');
Route::post('/buku/search',[UserController::class,'searchbuku'])->name('searchbuku');
Route::get('/all-books',[UserController::class,'allBooks'])->name('allBooks');
Route::get('/view/{buku:id}',[UserController::class,'detail'])->name('detail.buku');
Route::post('/search',[UserController::class,'search'])->name('search');
require __DIR__.'/auth.php';

// Penjual
Route::namespace('Penjual')->name('penjual.')->prefix('penjual')->group(function(){
    Route::namespace('Auth')->middleware('guest:penjual')->group(function(){
        // login route
        Route::get('login',[PenjualAuthenticatedSessionController::class,'create'])->name('login'); 
        Route::post('login',[PenjualAuthenticatedSessionController::class,'store'])->name('penjuallogin');
    });
    Route::namespace('penjual')->get('profil',[PenjualAppController::class,'profil'])->name('profil');
    Route::namespace('penjual')->post('profil/update/{penjual:id}',[PenjualAppController::class,'profilUpdate'])->name('profilUpdate');
    Route::namespace('penjual')->post('profil/update-password/{penjual:id}',[PenjualAppController::class,'changePassword'])->name('changePassword');
    Route::namespace('penjual')->post('logout',[PenjualAuthenticatedSessionController::class,'destroy'])->name('logout');
    Route::middleware('penjual')->group(function(){
        Route::get('dashboard',[PenjualAppController::class,'index'])->name('dashboard');
        Route::get('buku',[PenjualAppController::class,'listbuku'])->name('listbuku');
        Route::get('buku/show/{buku:id}',[PenjualAppController::class,'listbukuShow'])->name('listbuku.show');
        Route::get('buku/tambah',[PenjualAppController::class,'tambahbuku'])->name('tambahbuku');
        Route::post('buku/insert',[PenjualAppController::class,'insertbuku'])->name('insertbuku');
        Route::get('buku/edit/{buku}',[PenjualAppController::class,'editbuku'])->name('editbuku');
        Route::patch('buku/update/{buku:id}',[PenjualAppController::class,'updatebuku'])->name('updatebuku');
        Route::delete('buku/delete/{buku:id}',[PenjualAppController::class,'deletebuku'])->name('deletebuku');
        Route::get('listbuy',[PenjualAppController::class,'listbuy'])->name('listbuy');
        Route::get('listmetode',[PenjualAppController::class,'listmetode'])->name('listmetode');
        Route::get('listmetode/tambah',[PenjualAppController::class,'tambahMetode'])->name('tambahmetode');
        Route::get('listmetode/edit/{metode:id}',[PenjualAppController::class,'updateMetode'])->name('updatemetode');
        Route::delete('listmetode/delete/{metode:id}',[PenjualAppController::class,'deleteMetode'])->name('deletemetode');
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
    Route::namespace('admin')->post('profil/update/{admin:id}',[AdminAppController::class,'profilUpdate'])->name('profilUpdate');
    Route::namespace('admin')->post('profil/update-password/{admin:id}',[AdminAppController::class,'changePassword'])->name('changePassword');
    Route::middleware('admin')->group(function(){
        Route::get('dashboard',[AdminAppController::class,'dashboard'])->name('dashboard');
        Route::get('penjual',[AdminAppController::class,'listpenjual'])->name('listpenjual');
        Route::get('penjual/tambah',[AdminAppController::class,'tambahpenjual'])->name('tambahpenjual');
        Route::post('penjual/insert',[AdminAppController::class,'insertpenjual'])->name('insertpenjual');
        Route::get('penjual/edit/{penjual:id}',[AdminAppController::class,'editpenjual'])->name('editpenjual');
        Route::patch('penjual/update/{penjual:id}',[AdminAppController::class,'updatepenjual'])->name('updatepenjual');
        Route::delete('penjual/delete/{penjual:id}',[AdminAppController::class,'deletepenjual'])->name('hapuspenjual');
        Route::get('user',[AdminAppController::class,'listuser'])->name('listuser');
        Route::Delete('user/delete/{user:id}',[AdminAppController::class,'deleteuser'])->name('deleteuser');
        Route::get('user/detail/{user:id}',[AdminAppController::class,'detailuser'])->name('detailuser');

        // Books
        Route::get('books', [AdminAppController::class, 'books'])->name('books');
        Route::get('book/show/{buku:id}', [AdminAppController::class, 'bookShow'])->name('book.show');
        Route::post('book/insert', [AdminAppController::class, 'bookInsert'])->name('book.insert');
        Route::get('book/edit/{buku:id}', [AdminAppController::class, 'bookedit'])->name('book.edit');
        Route::patch('book/update/{buku:id}', [AdminAppController::class, 'bookUpdate'])->name('book.update');
        Route::get('book/terima/{buku:id}',[AdminAppController::class,'bookTerima'])->name('book.terima');
        Route::get('book/tolak/{buku:id}',[AdminAppController::class,'bookTolak'])->name('book.tolak');
        Route::delete('book/delete/{buku:id}',[AdminAppController::class,'bookDelete'])->name('book.delete');
        
        // Penerbit
        Route::get('penerbit',[AdminAppController::class,'listPenerbit'])->name('penerbit');
        Route::get('penerbit/accept/{penerbit:id}',[AdminAppController::class,'acceptPenerbit'])->name('penerbit.accept');
        Route::post('penerbit/declined/{penerbit:id}',[AdminAppController::class,'declinedPenerbit'])->name('penerbit.declined');
        Route::get('penerbit/detail/{penerbit:id}',[AdminAppController::class,'detailPenerbit'])->name('detail.penerbit');
        Route::get('progress/',[AdminAppController::class,'progressbuku'])->name('progres.buku');
        Route::get('progress/edit/{progress:id}',[AdminAppController::class,'editProgress'])->name('edit.progress');
        Route::post('progress/update/{progress:id}',[AdminAppController::class,'updateProgress'])->name('update.progress');
        Route::get('penerbit/show-buku/{penerbit:id}',[AdminAppController::class,'showBukuPenerbit'])->name('showBukuPenerbit');

        // Order
        Route::get('orders', [AdminAppController::class, 'orders'])->name('orders');
        Route::get('order/konfirmai/{buy:id}',[AdminAppController::class,'orderskonfirmasi'])->name('orders.konfirmasi');
        Route::get('order/unkonfirmai/{buy:id}',[AdminAppController::class,'orderscancel'])->name('orders.cancel');
        Route::get('order/show', [AdminAppController::class, 'orderShow'])->name('order.show');
        Route::delete('order/delete/{buy:id}',[AdminAppController::class,'orderDelete'])->name('order.delete');
        // Categories
        Route::get('categories', [AdminAppController::class, 'categories'])->name('categories');
        Route::patch('categories/update/{kategori:id}',[AdminAppController::class,'editcategories'])->name('categories.update');
        Route::post('categories/create',[AdminAppController::class,'insertcategories'])->name('categories.insert');
        Route::delete('categories/delete/{kategori:id}',[AdminAppController::class,'deletecategories'])->name('categories.delete');
        // Information
        Route::get('profile', [AdminAppController::class, 'profile'])->name('profile');  
    });
});