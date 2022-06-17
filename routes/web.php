<?php

use App\Http\Controllers\cekuserController;
use App\Http\Controllers\checkoutController;
use App\Http\Controllers\customerController;
use App\Http\Controllers\detailprodukController;
use App\Http\Controllers\laporanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\produk_controller;
use App\Http\Controllers\ViewUserController;
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



// Route::get('/loginauth', function () {
//     return view('welcome');
// });

// Route::get('/profiluser', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');


require __DIR__ . '/auth.php';

Route::get('/loginuser', function () {
    return view('login.login', [
        "judul" => "Login User"
    ]);
});


Route::get('/produk-adm', [produk_controller::class, 'index'])->name('rute_produkadmin');
Route::post('/produk-adm', [produk_controller::class, 'tambah'])->name('rute_tambahproduk');
Route::delete('/produk-adm/{id_produk}', [produk_controller::class, 'hapus'])->name('rute_hapusproduk');
Route::get('/produk-adm/{id_produk}/edit', [produk_controller::class, 'edit'])->name('rute_editproduk');
Route::post('/produk-adm/{id_produk}', [produk_controller::class, 'ubah'])->name('rute_updateproduk');
Route::get('/cekuser', [cekuserController::class, 'index'])->name('cekuser_admin');
Route::get('/laporan', [laporanController::class, 'index'])->name('laporan');
Route::get('/detaillaporan', [laporanController::class, 'detaillaporan'])->name('detaillaporan');

Route::get('/transaksi', function () {
    return view('admin.transaksi', [
        "judul" => "Halaman Transaksi | Admin"
    ]);
});

Route::get('/add-admin', function () {
    return view('admin.addadmin', [
        "judul" => "Sign Up Admin"
    ]);
});

Route::post('/add-admin', [RegisterController::class, 'add_admin'])->name('tambah_admin');

Route::get('/admins', function () {
    return view('admin.dashboard', [
        "judul" => "Dashboard | Admin"
    ]);
});

Route::get('/customadmin', function () {
    return view('admin.customadmin', [
        "judul" => "Halaman Custom | Admin"
    ]);
});


// Guest

Route::get('/', [ViewUserController::class, 'home'])->name('home');
Route::get('/belanja', [produk_controller::class, 'indexUser'])->name('rute_daftar_produk');
Route::get('/custom', [ViewUserController::class, 'custom'])->name('custom_user');
Route::get('/about', [ViewUserController::class, 'about'])->name('about_user');

Route::get('/payproduk', [ViewUserController::class, 'payproduk'])->name('payproduk_user');
Route::get('/profiluser', [customerController::class, 'index'])->name('profiluser')->middleware('auth');
Route::get('/detailproduk/{id_produk}', [detailprodukController::class, 'index'])->name('detail_produk');
Route::get('/checkout', [checkoutController::class, 'index']);
Route::post('/addcart', [customerController::class, 'addcart'])->name('addcart');