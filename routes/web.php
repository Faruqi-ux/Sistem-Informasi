<?php

use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BukuController;
use Illuminate\Support\Facades\Route;

// Auth Routes
Route::get('/', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');

// Dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');

// middleware admin
Route::middleware(['auth', 'role:admin'])->group(function () {
// Data Anggota Routes dengan CRUD
    Route::get('/data-anggota', [AnggotaController::class, 'index'])->name('dataAnggota');
    Route::get('/anggota/create', [AnggotaController::class, 'create'])->name('createAnggota');
    Route::post('/anggota/store', [AnggotaController::class, 'store'])->name('storeAnggota');
    Route::get('/anggota/edit/{id}', [AnggotaController::class, 'edit'])->name('editAnggota');
    Route::put('/anggota/update/{id}', [AnggotaController::class, 'update'])->name('updateAnggota');
    Route::delete('/anggota/delete/{id}', [AnggotaController::class, 'destroy'])->name('deleteAnggota');

// Data Buku
    Route::get('/data-buku', [BukuController::class, 'index'])->name('dataBuku');
    Route::get('/data-buku/create', [BukuController::class, 'create'])->name('createDataBuku');
    Route::post('/data-buku/store', [BukuController::class, 'store'])->name('storeDataBuku');
    Route::get('/data-buku/edit/{id}', [BukuController::class, 'edit'])->name('editDataBuku');
    Route::put('/data-buku/update/{id}', [BukuController::class, 'update'])->name('updateDataBuku');
    Route::delete('/data-buku/delete/{id}', [BukuController::class, 'destroy'])->name('deleteDataBuku');

    // Routes lainnya tetap sama
    Route::get('/data-peminjaman', function () {
        return view('dataPeminjaman');
    })->name('dataPeminjaman');

    Route::get('/data-pengembalian', function () {
        return view('dataPengembalian');
    })->name('dataPengembalian');

    Route::get('/data-laporan', function () {
        return view('dataLaporan');
    })->name('dataLaporan');

});

Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/katalog-buku', [BukuController::class, 'katalogBuku'])->name('katalogBuku');

    Route::get('/riwayat-peminjaman', function () {
        return view('riwayatPeminjaman');
    })->name('riwayatPeminjaman');
});