<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\JemaatController;
use App\Http\Controllers\KlasisController;
use App\Http\Controllers\PengurusController;
use App\Http\Controllers\BidangDuaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BidangSatuController;
use App\Http\Controllers\BidangTigaController;
use App\Http\Controllers\PengurusJemaatController;
use App\Http\Controllers\PengurusKlasisController;
use App\Http\Controllers\AnggaranBelanjaController;
use App\Http\Controllers\AnggotaJemaatController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\ProgramKerjaJemaatController;
use App\Http\Controllers\ProgramKerjaKlasisController;
use App\Http\Controllers\UserJemaatController;
use App\Http\Controllers\UserKlasisController;

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

Route::get('/',  [DashboardController::class, 'home']);
Route::get('/home-klasis',  [DashboardController::class, 'klasis']);
Route::get('/home-jemaat/{id}',  [DashboardController::class, 'showJemaat'])->name('jemaat.showJemaat');
Route::get('/gereja',  [DashboardController::class, 'showGereja']);
Route::get('/visi-misi',  [DashboardController::class, 'visiMisi']);
Route::get('/home-kegiatan',  [DashboardController::class, 'kegiatan']);
Route::get('/home-pengurus',  [DashboardController::class, 'pengurus']);

// Route::get('/', function () {
//     return view('pages/home/index');
// });

Route::prefix('dashboard')->controller(DashboardController::class)->group(function () {
    Route::get('/', 'index')->name('dashboard.index')->middleware('auth');
});


Route::prefix('anggota-jemaat')->controller(AnggotaJemaatController::class)->group(function () {
    Route::get('/', 'index')->name('anggota-jemaat.index')->middleware('auth');
    Route::post('/store', 'store');
    Route::get('/findById/{id}', 'findById');
    Route::post('/update', 'update');
    Route::delete('/destroy/{id}', 'destroy');
})->middleware('auth');


Route::prefix('jemaat')->controller(JemaatController::class)->group(function () {
    Route::get('/', 'index')->name('jemaat.index')->middleware('auth');
    Route::get('/create', 'create');
    Route::get('/findById/{id}', 'findById');
    Route::post('/store', 'store');
    Route::post('/update', 'update');
    Route::delete('/destroy/{id}', 'destroy');
    Route::get('/getIdAndNameAllKlasis', 'getIdAndNameAllKlasis');
    Route::get('/getAllJemaat', 'getAllJemaat');
    Route::get('/findOne/{id}', 'findOne');
})->middleware('auth');

Route::prefix('kegiatan')->controller(KegiatanController::class)->group(function () {
    Route::get('/', 'index')->name('kegiatan.index')->middleware('auth');
    Route::get('/create', 'create');
    Route::get('/findById/{id}', 'findById');
    Route::post('/store', 'store');
    Route::post('/update', 'update');
    Route::delete('/destroy/{id}', 'destroy');
});

Route::prefix('program-kerja-jemaat')->controller(ProgramKerjaJemaatController::class)->group(function () {
    Route::get('/', 'index')->name('program-kerja-jemaat.index')->middleware('auth');
    Route::get('/create', 'create');
    Route::get('/findById/{id}', 'findById');
    Route::post('/store', 'store');
    Route::post('/update', 'update');
    Route::delete('/destroy/{id}', 'destroy');
})->middleware('auth');

Route::prefix('program-kerja-klasis')->controller(ProgramKerjaKlasisController::class)->group(function () {
    Route::get('/', 'index')->name('program-kerja-klasis.index')->middleware('auth');
    Route::get('/create', 'create');
    Route::get('/findById/{id}', 'findById');
    Route::post('/store', 'store');
    Route::post('/update', 'update');
    Route::delete('/destroy/{id}', 'destroy');
})->middleware('auth');

Route::prefix('klasis')->controller(KlasisController::class)->group(function () {
    Route::get('/', 'index')->name('klasis.index')->middleware('auth');
    Route::get('/create', 'create');
    Route::get('/findById/{id}', 'findById');
    Route::post('/store', 'store');
    Route::post('/update', 'update');
    Route::delete('/destroy/{id}', 'destroy');
    Route::get('/getAllKlasis', 'getAllKlasis');
    // Route::get('/getIdAndNameAllKlasis', 'getIdAndNameAllKlasis');
    Route::get('/findOne/{id}', 'findOne');
})->middleware('auth');

Route::prefix('roles')->controller(RoleController::class)->group(function () {
    Route::get('/', 'index')->name('roles.index')->middleware('role:super_admin');
    Route::post('/store', 'store');
    Route::get('/findById/{id}', 'findById');
    Route::post('/update', 'update');
    Route::delete('/destroy/{id}', 'destroy');
})->middleware('auth');

Route::prefix('users-jemaat')->controller(UserJemaatController::class)->group(function () {
    Route::get('/', 'index')->name('users-jemaat.index')->middleware('auth');
    Route::post('/register', 'register');
    Route::get('/findById/{id}', 'findById');
    Route::post('/update', 'update');
    Route::delete('/destroy/{id}', 'destroy');
})->middleware('auth');

Route::prefix('users-klasis')->controller(UserKlasisController::class)->group(function () {
    Route::get('/', 'index')->name('users-klasis.index')->middleware('auth');
    Route::post('/register', 'register');
    Route::get('/findById/{id}', 'findById');
    Route::post('/update', 'update');
    Route::delete('/destroy/{id}', 'destroy');
})->middleware('auth');

Route::prefix('users')->controller(UserController::class)->group(function () {
    Route::get('/', 'index')->name('users.index')->middleware('role:super_admin');
    Route::post('/register', 'register');
    Route::get('/findById/{id}', 'findById');
    Route::post('/update', 'update');
    Route::delete('/destroy/{id}', 'destroy');
})->middleware('auth');

Route::prefix('anggaran-belanja')->controller(AnggaranBelanjaController::class)->group(function () {
    Route::get('/', 'index')->name('anggaran-belanja.index')->middleware('auth');
    Route::post('/store', 'store');
    Route::get('/findById/{id}', 'findById');
    Route::post('/update', 'update');
    Route::delete('/destroy/{id}', 'destroy');
})->middleware('auth');

// Route::get('/admin', [AdminController::class, 'index'])->middleware('role:admin,editor');

Route::prefix('pengurus-klasis')->controller(PengurusKlasisController::class)->group(function () {
    Route::get('/', 'index')->name('pengurus-klasis.index')->middleware('auth');
    Route::post('/store', 'store');
    Route::get('/findById/{id}', 'findById');
    Route::post('/update', 'update');
    Route::delete('/destroy/{id}', 'destroy');
})->middleware('auth');

Route::prefix('pengurus-jemaat')->controller(PengurusJemaatController::class)->group(function () {
    Route::get('/', 'index')->name('pengurus-jemaat.index')->middleware('auth');
    Route::post('/store', 'store');
    Route::get('/findById/{id}', 'findById');
    Route::post('/update', 'update');
    Route::delete('/destroy/{id}', 'destroy');
})->middleware('auth');

Route::prefix('pengurus')->controller(PengurusController::class)->group(function () {
    Route::get('/', 'index')->name('pengurus.index')->middleware('auth');
    Route::post('/store', 'store');
    Route::get('/findById/{id}', 'findById');
    Route::post('/update', 'update');
    Route::delete('/destroy/{id}', 'destroy');
})->middleware('auth');

Route::prefix('bidang-satu')->controller(BidangSatuController::class)->group(function () {
    Route::get('/', 'index')->name('bidang-satu.index')->middleware('auth');
    Route::get('/findById/{id}', 'findById');
    Route::post('/update', 'update');
    Route::delete('/destroy/{id}', 'destroy');
    Route::post('/store', 'store');
})->middleware('auth');

Route::prefix('bidang-dua')->controller(BidangDuaController::class)->group(function () {
    Route::get('/', 'index')->name('bidang-dua.index')->middleware('auth');
    Route::get('/findById/{id}', 'findById');
    Route::post('/update', 'update');
    Route::delete('/destroy/{id}', 'destroy');
    Route::post('/store', 'store');
})->middleware('auth');

Route::prefix('bidang-tiga')->controller(BidangTigaController::class)->group(function () {
    Route::get('/', 'index')->name('bidang-tiga.index')->middleware('auth');
    Route::get('/findById/{id}', 'findById');
    Route::post('/update', 'update');
    Route::delete('/destroy/{id}', 'destroy');
    Route::post('/store', 'store');
})->middleware('auth');
