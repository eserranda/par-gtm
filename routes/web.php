<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BidangDuaController;
use App\Http\Controllers\BidangSatuController;
use App\Http\Controllers\BidangTigaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('bidang-satu')->controller(BidangSatuController::class)->group(function () {
    Route::get('/', 'index')->name('bidang-satu.index');
    Route::get('/findById/{id}', 'findById');
    Route::post('/update', 'update');
    Route::delete('/destroy/{id}', 'destroy');
    Route::post('/store', 'store');
});

Route::prefix('bidang-dua')->controller(BidangDuaController::class)->group(function () {
    Route::get('/', 'index')->name('bidang-dua.index');
    Route::get('/findById/{id}', 'findById');
    Route::post('/update', 'update');
    Route::delete('/destroy/{id}', 'destroy');
    Route::post('/store', 'store');
});

Route::prefix('bidang-tiga')->controller(BidangTigaController::class)->group(function () {
    Route::get('/', 'index');
    Route::post('/store', 'store');
});