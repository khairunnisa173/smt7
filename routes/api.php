<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\JenisLaundryController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\LaporanController;

Route::get('/user', function () {
    return 'Hello World';
});

Route::get('/customer', [CustomerController::class, 'index']);
Route::get('/jenislaundry', [JenisLaundryController::class, 'index']);
Route::get('/transaksi', [TransaksiController::class, 'index']);
Route::get('/laporan', [LaporanController::class, 'index']);