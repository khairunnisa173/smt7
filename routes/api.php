<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\MetodePembayaranController;




Route::get('/user', function () {
    return 'Hello World';
});

Route::get('/customer', [CustomerController::class, 'index']);
Route::get('/transaksi', [TransaksiController::class, 'index']);
Route::get('/paket', [PaketController::class, 'index']);
Route::get('/metodepembayaran', [MetodePembayaranController::class, 'index']);
