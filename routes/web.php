<?php

use App\Http\Controllers\cekuserController;
use App\Http\Controllers\checkoutController;
use App\Http\Controllers\customerController;
use App\Http\Controllers\detailprodukController;
use App\Http\Controllers\laporanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\produk_controller;
use App\Http\Controllers\regioncontroller;
use App\Http\Controllers\ViewAdminController;
use App\Http\Controllers\ViewUserController;
use App\Models\customer;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Stmt\Function_;

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

require __DIR__ . '/auth.php';

// Admin

Route::middleware('auth:admin')->group(function () {
    Route::get('/admins', [ViewAdminController::class, 'admins'])->name('admins');
    Route::get('/cekuser', [cekuserController::class, 'index'])->name('cekuser_admin');

    Route::get('/produk-adm', [produk_controller::class, 'index'])->name('rute_produkadmin');
    Route::post('/produk-adm', [produk_controller::class, 'tambah'])->name('rute_tambahproduk');
    Route::delete('/produk-adm/{id_produk}', [produk_controller::class, 'hapus'])->name('rute_hapusproduk');
    Route::get('/produk-adm/{id_produk}/edit', [produk_controller::class, 'edit'])->name('rute_editproduk');
    Route::post('/produk-adm/{id_produk}', [produk_controller::class, 'ubah'])->name('rute_updateproduk');

    Route::get('/transaksi', [ViewAdminController::class, 'transaksi'])->name('transaksi_admin');

    Route::get('/customadmin', [ViewAdminController::class, 'customadmin'])->name('customadmin');

    Route::get('/add-admin', [ViewAdminController::class, 'addadmin'])->name('addadmin');
    Route::post('/add-admin', [RegisterController::class, 'add_admin'])->name('tambah_admin');

    Route::get('/laporan', [laporanController::class, 'index'])->name('laporan');
    Route::get('/detaillaporan', [laporanController::class, 'detaillaporan'])->name('detaillaporan');
});




// Guest

Route::get('/', [ViewUserController::class, 'home'])->name('home');
Route::get('/belanja', [produk_controller::class, 'indexUser'])->name('rute_daftar_produk');
Route::get('/detailproduk/{id_produk}', [detailprodukController::class, 'index'])->name('detail_produk');
Route::get('/custom', [ViewUserController::class, 'custom'])->name('custom_user');
Route::get('/about', [ViewUserController::class, 'about'])->name('about_user');

Route::get('/payproduk', [ViewUserController::class, 'payproduk'])->name('payproduk_user');

Route::middleware('auth')->group(function () {
    Route::get('/profiluser', [customerController::class, 'index'])->name('profiluser');
    Route::put('/profiluser/edit', [customerController::class, 'editprofil'])->name('profiluseredit');
    Route::get('/getstate', [customerController::class, 'getstate'])->name('getstate');
    Route::get('/getregion', [customerController::class, 'getregion'])->name('getregion');
    Route::post('/getkabupaten', [regioncontroller::class, 'getkabupaten'])->name('getkabupaten');
    Route::post('/getkecamatan', [regioncontroller::class, 'getkecamatan'])->name('getkecamatan');
    Route::post('/getdesa', [regioncontroller::class, 'getdesa'])->name('getdesa');
});


Route::get('/checkout', [checkoutController::class, 'index']);
Route::post('/addcart', [customerController::class, 'addcart'])->name('addcart');
Route::post('/addcartdetail', [customerController::class, 'addcartdetail'])->name('addcartdetail');
Route::delete('/hapuscart', [customerController::class, 'hapuscart'])->name('hapuscart');
