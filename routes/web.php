<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {

    // Dashboard
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Daftar mahasiswa
    Route::get('/mahasiswa', [MahasiswaController::class, 'index'])
        ->name('mahasiswa.index');

    // Tambah mahasiswa - ADMIN
    Route::get('/mahasiswa/create', [MahasiswaController::class, 'create'])
        ->middleware('role:admin')
        ->name('mahasiswa.create');

    Route::post('/mahasiswa', [MahasiswaController::class, 'store'])
        ->middleware('role:admin')
        ->name('mahasiswa.store');

    // Detail mahasiswa
    Route::get('/mahasiswa/{mahasiswa}', [MahasiswaController::class, 'show'])
        ->name('mahasiswa.show');

    // Edit mahasiswa - ADMIN
    Route::get('/mahasiswa/{mahasiswa}/edit', [MahasiswaController::class, 'edit'])
        ->middleware('role:admin')
        ->name('mahasiswa.edit');

    Route::put('/mahasiswa/{mahasiswa}', [MahasiswaController::class, 'update'])
        ->middleware('role:admin')
        ->name('mahasiswa.update');

    // Hapus mahasiswa - ADMIN
    Route::delete('/mahasiswa/{mahasiswa}', [MahasiswaController::class, 'destroy'])
        ->middleware('role:admin')
        ->name('mahasiswa.destroy');
});

// Profile dari Breeze
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');
});

require __DIR__.'/auth.php';