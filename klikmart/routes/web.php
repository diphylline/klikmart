<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::get('/produk', [ProdukController::class, 'produk'])->name('produk');
Route::get('/keranjang', [ProdukController::class, 'keranjang'])->name('keranjang');
Route::get('/details', [ProdukController::class, 'details'])->name('details');
Route::post('/tambah/{product}', [ProdukController::class, 'addProduk'])->name('tambah_k');
Route::get('/details/{id_order}', [ProdukController::class, 'show'])->name('show_details');

