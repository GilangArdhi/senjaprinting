<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\LandingPage;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Auth\VerificationController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [LandingPage::class, 'index']);
Route::get('masuk', [AuthController::class, 'login']);
Route::get('daftar', [AuthController::class, 'daftar']);
Route::get('resende', [AuthController::class, 'verifyr']);
Auth::routes([ 'verify' => true ]);
Route::get('detail', [LandingPage::class, 'detail'])->name('detail');
Route::get('/product/search', [LandingPage::class, 'search'])->name('product.search');
Route::get('/products/filter', [LandingPage::class, 'filterBySize'])->name('products.filter');
// Rute kustom untuk tampilan verifikasi
// Route::get('/verify-email', [VerificationController::class,'show'])->name('verification.notice');
// Route::get('/resend-verification', [VerificationController::class,'resend'])->name('verification.resend');

Route::post('/masuk', [AuthController::class, 'masuk'])->name('masuk');
Route::post('daftar', [AuthController::class, 'postdaftar'])->name('daftar');

Route::get('notif', [DonationController::class, 'notification']);

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'admin']);
    Route::post('insert', [AdminController::class, 'insert']);
    Route::get('mengedit/{id}', [AdminController::class, 'details'])->name('mengedit');
    Route::post('edit', [AdminController::class, 'edit']);
    Route::post('delete', [AdminController::class, 'delete']);
    Route::get('transaksi', [AdminController::class, 'transaction']);
    // Route::get('/dashboard', [DashboardController::class, 'index']);
});

Route::middleware(['auth'])->group(function () {
    // Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/logout', [AuthController::class, 'logout']);
});

Route::middleware(['auth', 'role:pelanggan'])->group(function(){
    Route::post('masuk-keranjang', [LandingPage::class, 'masukKeranjang']);
    Route::get('lihatKeranjang', [LandingPage::class, 'Keranjang'])->name('lihatKeranjang');
    Route::get('edit-keranjang', [LandingPage::class, 'editKeranjang']);
    Route::post('hapus-keranjang', [LandingPage::class, 'deleteItemKeranjang'])->name('hapus-keranjang');
    Route::get('/pembayaran', [LandingPage::class, 'pembayaran']);
    Route::post('/api/donation', [DonationController::class, 'store'])->name('api.donation.store');
}) ;

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
