<?php

use Illuminate\Support\Facades\Route;
use App\http\controllers\DokterController;
use App\http\controllers\SpesialisController;
use App\http\controllers\PerawatController;
use App\http\controllers\PasienController;
use App\http\controllers\RuanganController;
use App\http\controllers\PenyakitController;
use App\http\controllers\NomorController;
use App\Http\Controllers\LoginController;

use App\http\controllers\DokterFront;
use App\http\controllers\PenyakitFront;
use App\http\controllers\RuanganFront;
use App\http\controllers\SpesialisFront;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');

Route::get('/login', [LoginController::class,'login'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class,'authenticate']);

Route::get('/logout', [LoginController::class,'logout']);


Route::resource('/dokter', DokterController::class)->middleware('auth');

Route::resource('/perawat', PerawatController::class)->middleware('auth');

Route::resource('/pasien', PasienController::class)->middleware('auth');

Route::resource('/penyakit', PenyakitController::class)->middleware('auth');

Route::resource('/ruangan', RuanganController::class)->middleware('auth');

Route::resource('/nomor', NomorController::class)->middleware('auth');

Route::resource('/spesialis', SpesialisController::class)->middleware('auth');

Route::resource('/spesialis-front', SpesialisFront::class);
Route::resource('/ruangan-front', RuanganFront::class);
Route::resource('/dokter-front', DokterFront::class);
Route::resource('/penyakit-front', PenyakitFront::class);


