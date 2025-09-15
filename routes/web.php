<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArsipSuratController;

Route::get('/', [ArsipSuratController::class, 'index'])->name('arsip.index');
Route::get('/arsip/create', [ArsipSuratController::class, 'create'])->name('arsip.create');
Route::post('/arsip', [ArsipSuratController::class, 'store'])->name('arsip.store');
Route::get('/arsip/{id}', [ArsipSuratController::class, 'show'])->name('arsip.show');
Route::get('/arsip/{id}/download', [ArsipSuratController::class, 'download'])->name('arsip.download');
Route::delete('/arsip/{id}', [ArsipSuratController::class, 'destroy'])->name('arsip.destroy');

Route::resource('kategori', \App\Http\Controllers\KategoriSuratController::class);

Route::get('/about', function () {
    return view('about');
})->name('about');

