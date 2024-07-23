<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PengurusController;
use App\Http\Controllers\BidangDuaController;
use App\Http\Controllers\BidangSatuController;
use App\Http\Controllers\BidangTigaController;
use App\Http\Controllers\AnggaranBelanjaController;
use App\Http\Controllers\RoleController;

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

// Route::get('register', [UserController::class, 'showRegistrationForm'])->name('register');
// Route::post('register', [UserController::class, 'register']);

Route::get('login', [UserController::class, 'showLoginForm'])->name('login')->middleware('guest');
Route::post('login', [UserController::class, 'login'])->middleware('guest');

Route::get('logout', [UserController::class, 'logout'])->name('logout');


Route::get('/', function () {
    return view('welcome');
});

Route::prefix('roles')->controller(RoleController::class)->group(function () {
    Route::get('/', 'index')->name('roles.index')->middleware('role:super_admin');
    Route::post('/store', 'store');
    Route::get('/findById/{id}', 'findById');
    Route::post('/update', 'update');
    Route::delete('/destroy/{id}', 'destroy');
});

Route::prefix('users')->controller(UserController::class)->group(function () {
    Route::get('/', 'index')->name('users.index')->middleware('role:super_admin');
    Route::post('/register', 'register');
    Route::get('/findById/{id}', 'findById');
    Route::post('/update', 'update');
    Route::delete('/destroy/{id}', 'destroy');
});

Route::prefix('anggaran-belanja')->controller(AnggaranBelanjaController::class)->group(function () {
    Route::get('/', 'index')->name('anggaran-belanja.index')->middleware('role:super_admin,admin');
    Route::post('/store', 'store');
    Route::get('/findById/{id}', 'findById');
    Route::post('/update', 'update');
    Route::delete('/destroy/{id}', 'destroy');
});

// Route::get('/admin', [AdminController::class, 'index'])->middleware('role:admin,editor');

Route::prefix('pengurus')->controller(PengurusController::class)->group(function () {
    Route::get('/', 'index')->name('pengurus.index')->middleware('role:super_admin,admin');
    Route::post('/store', 'store');
    Route::get('/findById/{id}', 'findById');
    Route::post('/update', 'update');
    Route::delete('/destroy/{id}', 'destroy');
});

Route::prefix('bidang-satu')->controller(BidangSatuController::class)->group(function () {
    Route::get('/', 'index')->name('bidang-satu.index')->middleware('role:super_admin,admin');
    Route::get('/findById/{id}', 'findById');
    Route::post('/update', 'update');
    Route::delete('/destroy/{id}', 'destroy');
    Route::post('/store', 'store');
});

Route::prefix('bidang-dua')->controller(BidangDuaController::class)->group(function () {
    Route::get('/', 'index')->name('bidang-dua.index')->middleware('role:super_admin,admin');
    Route::get('/findById/{id}', 'findById');
    Route::post('/update', 'update');
    Route::delete('/destroy/{id}', 'destroy');
    Route::post('/store', 'store');
});

Route::prefix('bidang-tiga')->controller(BidangTigaController::class)->group(function () {
    Route::get('/', 'index')->name('bidang-tiga.index')->middleware('role:super_admin,admin');
    Route::get('/findById/{id}', 'findById');
    Route::post('/update', 'update');
    Route::delete('/destroy/{id}', 'destroy');
    Route::post('/store', 'store');
});
