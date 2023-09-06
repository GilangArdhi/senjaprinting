<?php

use App\Http\Controllers\DonationController;
use App\Http\Controllers\LandingPage;
use App\Http\Controllers\AuthController;
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
Route::get('detail', [LandingPage::class, 'detail'])->name('detail');
Route::get('/product/search', [LandingPage::class, 'search'])->name('product.search');

Route::post('/masuk', [AuthController::class, 'masuk'])->name('masuk');
Route::post('daftar', [AuthController::class, 'postdaftar'])->name('daftar');

Route::middleware(['auth', 'role:restoran'])->group(function () {
    // Route::get('/dashboard', [DashboardController::class, 'index']);
});

Route::middleware(['auth'])->group(function () {
    // Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::post('/logout', [LandingPage::class, 'logout']);
});

Route::middleware(['auth', 'role:pelanggan'])->group(function(){
    Route::post('masuk-keranjang', [LandingPage::class, 'masukKeranjang']);
    Route::get('lihatKeranjang', [LandingPage::class, 'Keranjang'])->name('lihatKeranjang');
    Route::get('edit-keranjang', [LandingPage::class, 'editKeranjang']);
    Route::get('/pembayaran', [LandingPage::class, 'pembayaran']);
    Route::post('/api/donation', [DonationController::class, 'store'])->name('api.donation.store');
}) ;
