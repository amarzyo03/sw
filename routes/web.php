<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\siswaController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\authController;
use App\Http\Controllers\ganjilNilaiMurniController;
use App\Http\Controllers\ganjilRaporController;
use App\Http\Controllers\genapNilaiMurniController;
use App\Http\Controllers\presensiController;
use App\Http\Controllers\userSiswaController;

// Route::get('/', function () {
//     return view('welcome');
// });

######################### Admin Page ###########################
Route::get('/', [authController::class, 'login'])->name('login');
Route::post('/attemp-login', [authController::class, 'attempLogin'])->name('attemp-login');
Route::get('/logout', [authController::class, 'logout'])->name('logout');

Route::middleware(['adminAuth'])->group(function () {
    Route::resource('dashboard', dashboardController::class); // dashboard
    Route::resource('siswa', siswaController::class); // siswa


    Route::prefix('presensi')->name('presensi.')->group(function () {
        Route::get('/', [presensiController::class, 'index'])->name('index');
        Route::get('edit', [presensiController::class, 'edit'])->name('edit');
        Route::post('update', [presensiController::class, 'update'])->name('update');
    });

    Route::prefix('ganjil')->name('ganjil-')->group(function () {
        Route::get('nilai-murni', [ganjilNilaiMurniController::class, 'index'])->name('nilai-murni');
        Route::get('rapor', [ganjilRaporController::class, 'index'])->name('rapor');
    });

    Route::prefix('genap')->name('genap-')->group(function () {
        Route::get('nilai-murni', [genapNilaiMurniController::class, 'index'])->name('nilai-murni');
    });
});


######################## User Siswa Page ########################
Route::prefix('ssw')->name('siswa.')->group(function () {
    Route::get('login', [userSiswaController::class, 'login'])->name('login');
    Route::post('attemp-login', [userSiswaController::class, 'attempLogin'])->name('attemp-login');
    Route::get('logout', [userSiswaController::class, 'logout'])->name('logout');

    Route::middleware(['siswaAuth'])->group(function () {
        Route::get('dashboard', [userSiswaController::class, 'dashboard'])->name('dashboard');

        Route::get('show', [userSiswaController::class, 'show'])->name('show-profil');
        Route::get('edit', [userSiswaController::class, 'edit'])->name('edit-profil');
        Route::post('update', [userSiswaController::class, 'update'])->name('update-profil');

        Route::prefix('ganjil')->name('ganjil-')->group(function () {
            Route::get('nilai-murni', [userSiswaController::class, 'ganjil_nilai_murni'])->name('nilai-murni');
            Route::get('rapor', [userSiswaController::class, 'ganjil_rapor'])->name('rapor');
        });
    });
});
