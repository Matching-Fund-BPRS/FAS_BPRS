<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NasabahController;
use App\Http\Controllers\FasExistController;
use App\Http\Controllers\AnKuanController;

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


Route::get('/dashboard/ankual', function () {
    return view('ankual');
});

//analisis kuantitatif page
Route::get('/dashboard/ankuan', [AnKuanController::class, 'anKuanIndex']);


Route::get('/dashboard/infokeuangan', function () {
    return view('infokeuangan');
});

Route::get('/dashboard/limitkredit', function () {
    return view('limitkredit');
});
