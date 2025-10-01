<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\siswaController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\userSiswaController;
use App\Http\Controllers\authController;
use App\Http\Controllers\ganjilMurniController;
use App\Http\Controllers\mapelController;

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

    // mapel
    Route::resource('mapel', mapelController::class);

    // penilaian ganjil
    Route::resource('ganjil-murni', ganjilMurniController::class);
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
});
