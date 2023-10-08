<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NasabahController;
use App\Http\Controllers\FasExistController;
use App\Http\Controllers\AnKuanController;
use App\Http\Controllers\AnKualController;
use App\Http\Controllers\AngsuranController;
use App\Http\Controllers\InfoKeuanganController;
use App\Http\Controllers\LimitKreditController;
use App\Http\Controllers\RugiLabaController;
use App\Http\Controllers\RekomendasiController;


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

//info keuangan page
Route::get('/dashboard/infokeuangan', function () {
    return view('infokeuangan');
});
Route::post('/dashboard/infokeuangan/tambah', [InfoKeuanganController::class, 'addInfoKeuangan'])->name('tambah_info_keuangan');

//limit kredit page
Route::get('/dashboard/limitkredit', [LimitKreditController::class, 'index']);
Route::post('/dashboard/limitkredit/tambah', [LimitKreditController::class, 'addLimitKredit'])->name('tambah_limit_kredit');

//rugi laba page
Route::get('/dashboard/rugilaba', [RugiLabaController::class, 'index']);

//Daftar angsuran page
Route::get('/dashboard/daftarangsuran', [AngsuranController::class, 'index']);

//rekomendasi page
Route::get('/dashboard/rekomendasi', function () {
    return view('rekomendasi');
});
Route::post('/dashboard/rekomendasi/tambah', [RekomendasiController::class, 'addRekomendasi'])->name('tambah_rekomendasi');

Route::get('/dashboard/neraca', function () {
    return view('neraca');
});

