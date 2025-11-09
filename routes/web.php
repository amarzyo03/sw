<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\siswaController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\authController;
use App\Http\Controllers\ganjil\rapor\nilaiController;
use App\Http\Controllers\mapelController;
use App\Http\Controllers\nilaiMurniPSTSGanjilController;
use App\Http\Controllers\userSiswaController;

// Route::get('/', function () {
//     return view('welcome');
// });

######################### Admin Page ###########################
Route::get('/', [authController::class, 'login']);
Route::post('/attemp-login', [authController::class, 'attempLogin']);

Route::middleware(['adminAuth'])->group(function () {
    Route::resource('dashboard', dashboardController::class);
    Route::get('/logout', [authController::class, 'logout']);

    // siswa
    Route::resource('siswa', siswaController::class);
    Route::get('/siswa/{id}/delete', [siswaController::class, 'destroy']);

    // Mapel
    Route::resource('mapel', mapelController::class);

    // Nilai Murni PSTS
    Route::resource('nilai-murni-psts-ganjil', nilaiMurniPSTSGanjilController::class);

    // Nilai Rapor Ganjil
    Route::get('nilai-rapor-ganjil', [nilaiController::class, 'index']);
    Route::get('nilai-rapor-ganjil/{id}/create', [nilaiController::class, 'create']);
    Route::post('nilai-rapor-ganjil', [nilaiController::class, 'store']);
});



######################## User Siswa Page ########################
Route::get('/user-siswa/login', [userSiswaController::class, 'login']);
Route::post('/user-siswa/attemp-login', [userSiswaController::class, 'attempLogin']);

Route::middleware(['siswaAuth'])->prefix('user-siswa')->group(function () {
    Route::get('/dashboard', [userSiswaController::class, 'dashboard']);

    Route::get('/show', [userSiswaController::class, 'show']);
    Route::get('/edit', [userSiswaController::class, 'edit']);
    Route::post('/update', [userSiswaController::class, 'update']);
    Route::get('/logout', [userSiswaController::class, 'logout']);

    // Nilai Murni PSTS Ganjil
    Route::get('/nilai-murni-psts-ganjil', [userSiswaController::class, 'nilaiMurniPSTSGanjil']);
});
