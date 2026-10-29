<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrediksiController;

Route::get('/', [PrediksiController::class, 'index'])->name('home');
Route::get('/tentang', [PrediksiController::class, 'tentang'])->name('tentang');
Route::get('/prediksi', [PrediksiController::class, 'formPrediksi'])->name('prediksi');
Route::post('/hasil-prediksi', [PrediksiController::class, 'prosesData'])->name('hasil-prediksi');
Route::get('/riwayat', [PrediksiController::class, 'riwayat'])->name('riwayat');