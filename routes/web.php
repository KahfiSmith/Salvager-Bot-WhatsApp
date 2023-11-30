<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\RiwayatController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\PelangganController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

Route::get('/', function () {
    return view('backend.welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index'], function () {
    return view('backend.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout')->middleware('auth', 'verified');

Route::resource('pelanggan', App\Http\Controllers\Backend\PelangganController::class);
Route::resource('riwayat', App\Http\Controllers\Backend\RiwayatController::class);   
Route::resource('profile', App\Http\Controllers\Backend\ProfileController::class);   
Route::get('/riwayat.pelanggan', [RiwayatController::class, 'index']);
Route::get('/riwayat/download-pdf/{id}', 'App\Http\Controllers\Backend\RiwayatController@downloadPDF')->name('riwayat/download.pdf');

require __DIR__.'/auth.php';


