<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NasabahController;
use App\Http\Controllers\FasExistController;
use App\Http\Controllers\AnKuanController;
use App\Http\Controllers\AnKualController;
use App\Http\Controllers\AngsuranController;

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
    return view('dashboard');
});

Route::get('/dashboard/danolisa', [NasabahController::class, 'index']);

Route::post('/dashboard/detaildata/tambah-nasabah', [NasabahController::class, 'tambah_nasabah'])->name("tambah_nasabah");

Route::get('/dashboard/detaildata', function () {
    return view('detaildataentry');
});

Route::get('/dashboard/detaildataBU', function () {
    return view('detaildataentryBU');
});

Route::get('/dashboard/detailnota', function () {
    return view('dashboardnota');
});

// fasilitas existing page
Route::get('/dashboard/fasilitasexisting', [FasExistController::class, 'fasIndex']);
Route::post('/dashboard/fasilitasexisting/tambah_bisid', [FasExistController::class, 'tambah_bisid'])->name("tambah_bisid");

//analisisa kualitatif page
Route::get('/dashboard/ankual', function () {
    return view('ankual');
});
Route::post('/dashboard/ankual/tambah-ankual', [AnKualController::class, 'addAnkual'])->name('tambah_ankual');

//analisis kuantitatif page
Route::get('/dashboard/ankuan', [AnKuanController::class, 'anKuanIndex']);
Route::post('/dashboard/ankuan/tambah-resiko', [AnKuanController::class, 'addResiko'])->name('tambah_resiko');

Route::get('/dashboard/infokeuangan', function () {
    return view('infokeuangan');
});

Route::get('/dashboard/limitkredit', function () {
    return view('limitkredit');
});

Route::get('/dashboard/rugilaba', function () {
    return view('rugilaba');
});

//Daftar angsuran page
Route::get('/dashboard/daftarangsuran', [AngsuranController::class, 'index']);


Route::get('/dashboard/rekomendasi', function () {
    return view('rekomendasi');
});

Route::get('/dashboard/neraca', function () {
    return view('neraca');
});

