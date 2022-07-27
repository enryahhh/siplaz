<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\CekOngkirController;
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
Route::get('/',function(){
    return view('welcome');
})->middleware('guest');
Auth::routes([
    'register' => false
]);
// Route::middleware(['auth'])->group(function () {
//     Route::prefix('ongkir')->group(function () {
//         Route::get('/province',[CekOngkirController::class,'index']);
//         Route::get('/{provinceId}/city',[CekOngkirController::class,'getCity']);
//         Route::post('/harga',[CekOngkirController::class,'cekOngkir']);
//         Route::get('/cek-ongkir',[CekOngkirController::class,'ongkirView'])->name('ongkir.view');
//     });
//     Route::prefix('admin')->group(function () {
//         Route::get('/dashboard',[AdminController::class,'dashboard'])->name('dashboard-admin');
//         Route::resource('barang', BarangController::class);
//         Route::get('/transaksi',[TransaksiController::class,'index'])->name('admin.transaksi');
//         Route::post('/checkout',[TransaksiController::class,'storeCart'])->name('admin.checkout');
//         Route::get('/checkout-view',[TransaksiController::class,'checkoutView'])->name('admin.checkout-view');
//         Route::get('/transaksi/create',[TransaksiController::class,'addTransaksi'])->name('admin.add-transaksi');
//         Route::post('/tambah-transaksi',[TransaksiController::class,'storeTransaksi'])->name('transaksi.store');
//         Route::get('/detail-transaksi/{id_trans}',[TransaksiController::class,'detailTransaksi'])->name('transaksi.detail');
//     });
    
// });

Route::prefix('admin')->group(function () {
        Route::get('/dashboard',[AdminController::class,'dashboard'])->name('dashboard-admin');
        Route::get('/pembeli',function(){
            return view('admin.pembeli.index');
        })->name('pembeli.index');
        Route::get('/tagihan',function(){
            return view('admin.pembeli.tagihan');
        })->name('tagihan.index');
        Route::resource('barang', BarangController::class);
        Route::get('/transaksi',[TransaksiController::class,'index'])->name('admin.transaksi');
        Route::post('/checkout',[TransaksiController::class,'storeCart'])->name('admin.checkout');
        Route::get('/checkout-view',[TransaksiController::class,'checkoutView'])->name('admin.checkout-view');
        Route::get('/transaksi/create',[TransaksiController::class,'addTransaksi'])->name('admin.add-transaksi');
        Route::post('/tambah-transaksi',[TransaksiController::class,'storeTransaksi'])->name('transaksi.store');
        Route::get('/detail-transaksi/{id_trans}',[TransaksiController::class,'detailTransaksi'])->name('transaksi.detail');
        Route::get('/detail-tagihan',function(){
            return view('admin.pembeli.tagihan-detail');
        })->name('tagihan.detail');
        Route::get('/pengaturan',function(){
            return view('admin.pengaturan');
        })->name('pengaturan');
    });

Route::get('cart',function(){
    return view('cart');
})->name('cart');


