<?php

use App\Http\Controllers\AnggaranBelanjaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BidangDuaController;
use App\Http\Controllers\BidangSatuController;
use App\Http\Controllers\BidangTigaController;
use App\Http\Controllers\PengurusController;

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

Route::prefix('anggaran-belanja')->controller(AnggaranBelanjaController::class)->group(function () {
    Route::get('/', 'index')->name('anggaran-belanja.index');
    Route::post('/store', 'store');
    Route::get('/findById/{id}', 'findById');
    Route::post('/update', 'update');
    Route::delete('/destroy/{id}', 'destroy');
});

Route::prefix('pengurus')->controller(PengurusController::class)->group(function () {
    Route::get('/', 'index')->name('pengurus.index');
    Route::post('/store', 'store');
    Route::get('/findById/{id}', 'findById');
    Route::post('/update', 'update');
    Route::delete('/destroy/{id}', 'destroy');
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
    Route::get('/', 'index')->name('bidang-tiga.index');
    Route::get('/findById/{id}', 'findById');
    Route::post('/update', 'update');
    Route::delete('/destroy/{id}', 'destroy');
    Route::post('/store', 'store');
});
