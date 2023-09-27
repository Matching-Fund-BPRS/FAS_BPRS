<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard/danolisa', function () {
    return view('danolisa');
});

Route::get('/dashboard/detaildata', function () {
    return view('detaildataentry');
});

Route::get('/dashboard/detaildataBU', function () {
    return view('detaildataentryBU');
});

Route::get('/dashboard/detailnota', function () {
    return view('dashboardnota');
});

Route::get('/dashboard/fasilitasexisting', function () {
    return view('fasilitasexisting');
});

Route::get('/dashboard/ankual', function () {
    return view('ankual');
});

Route::get('/dashboard/ankuan', function () {
    return view('ankuan');
});
Route::get('/dashboard/infokeuangan', function () {
    return view('infokeuangan');
});
