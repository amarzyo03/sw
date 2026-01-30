<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\siswaController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\authController;
use App\Http\Controllers\dataKelasController;
use App\Http\Controllers\ganjil\psas\raporController;
use App\Http\Controllers\ganjil\psts\nilaiMurniController;
use App\Http\Controllers\ganjil\rapor\nilaiController;
use App\Http\Controllers\mapelController;
use App\Http\Controllers\presensiController;
use App\Http\Controllers\userSiswaController;

// Route::get('/', function () {
//     return view('welcome');
// });

######################### Admin Page ###########################
Route::get('/', [authController::class, 'login']);
Route::post('/attemp-login', [authController::class, 'attempLogin']);

Route::middleware(['adminAuth'])->group(function () {
    Route::resource('dashboard', dashboardController::class); // dashboard
    Route::resource('siswa', siswaController::class); // siswa


    // Presensi
    Route::get('presensi', [presensiController::class, 'index'])->name('presensi.index');
    Route::get('presensi/edit', [presensiController::class, 'edit'])->name('presensi.edit');
    Route::post('presensi/update', [presensiController::class, 'update'])->name('presensi.update');

    // Nilai Murni PSTS Ganjil
    Route::get('ganjil/psts/nilai-murni', [nilaiMurniController::class, 'index'])->name('nilai-murni-psts');
    Route::get('ganjil/psts/nilai-murni/export', [nilaiMurniController::class, 'export']);

    // Rapor PSAS Ganjil
    Route::get('ganjil/psas/rapor', [raporController::class, 'index'])->name('rapor-psas');

    // Logout
    Route::get('/logout', [authController::class, 'logout']);
});



######################## User Siswa Page ########################
Route::get('/user-siswa/login', [userSiswaController::class, 'login']);
Route::post('/user-siswa/attemp-login', [userSiswaController::class, 'attempLogin']);

Route::middleware(['siswaAuth'])->prefix('user-siswa')->group(function () {
    Route::get('/dashboard', [userSiswaController::class, 'dashboard']);

    Route::get('/show', [userSiswaController::class, 'show'])->name('profil-siswa');
    Route::get('/edit', [userSiswaController::class, 'edit']);
    Route::post('/update', [userSiswaController::class, 'update']);
    Route::get('/logout', [userSiswaController::class, 'logout']);

    // Nilai Murni PSTS Ganjil
    Route::get('/ganjil/psts/nilai-murni', [userSiswaController::class, 'ganjil_psts_nilai_murni'])->name('ganjil-psts-nilai-murni-siswa');

    // Rapor PSAS Ganjil
    Route::get('/ganjil/psas/rapor', [userSiswaController::class, 'ganjil_psas_rapor'])->name('ganjil-psas-rapor-siswa');
});
