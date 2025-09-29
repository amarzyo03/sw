<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\siswaController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\userSiswaController;
use App\Http\Controllers\authController;
use App\Http\Controllers\penilaianGanjilController;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [authController::class, 'login']);
Route::post('/attemp-login', [authController::class, 'attempLogin']);

Route::middleware(['adminAuth'])->group(function () {
    Route::resource('dashboard', dashboardController::class);
    Route::resource('siswa', siswaController::class);
    Route::get('/siswa/{id}/delete', [siswaController::class, 'destroy']);
    Route::get('/logout', [authController::class, 'logout']);

    Route::get('/penilaian-ganjil', [penilaianGanjilController::class, 'index']);
});


Route::get('/user-siswa/login', [userSiswaController::class, 'login']);
Route::post('/user-siswa/attemp-login', [userSiswaController::class, 'attempLogin']);

Route::middleware(['siswaAuth'])->group(function () {
    Route::get('/user-siswa/dashboard', [userSiswaController::class, 'dashboard']);
    Route::get('/user-siswa/show/', [userSiswaController::class, 'show']);
    Route::get('/user-siswa/edit/', [userSiswaController::class, 'edit']);
    Route::post('/user-siswa/update/', [userSiswaController::class, 'update']);
    Route::get('/user-siswa/logout', [userSiswaController::class, 'logout']);
});
