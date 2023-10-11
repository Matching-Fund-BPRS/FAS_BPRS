<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthenticateController;
use App\Http\Controllers\UserController;

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
})->name('home');

Route::get('/dashboard/danolisa', [NasabahController::class, 'index']);


//////////////////////////////////////////////////////////////////////////////
// DATA ENTRY PAGE
Route::post('/dashboard/detaildata/tambah-nasabah', [NasabahController::class, 'tambah_nasabah'])->name("tambah_nasabah");
Route::post('/dashboard/detaildata/{id}/edit', [NasabahController::class, 'edit_data_nasabah'])->name("edit_data_nasabah");

Route::get('/dashboard/detaildata', function () {
    return view('detaildataentry',[
        'nasabah' => null
    ]);
});
Route::get('/dashboard/detaildata/{id}', [NasabahController::class, 'data_nasabah']);
Route::get('/dashboard/detaildataBU', function () {
    return view('detaildataentryBU', [
        'nasabah' => null
    ]);
});
Route::get('/dashboard/detaildataBU/{id}', [NasabahController::class, 'data_usaha_nasabah']);


Route::get('/dashboard/detailnota', [NasabahController::class, 'searchNasabah'])->name("search-id");


//////////////////////////////////////////////////////////////////////////////
// fasilitas existing page
Route::get('/dashboard/fasilitasexisting/{id}', [FasExistController::class, 'fasIndex']);
Route::post('/dashboard/fasilitasexisting/tambah_bisid', [FasExistController::class, 'tambah_bisid'])->name("tambah_bisid");

/////////////////////////////////////////////////////////////////////////////////////////////////////////
//analisisa kualitatif page
Route::get('/dashboard/ankual/{id}', [AnKualController::class, 'index']);
Route::post('/dashboard/ankual/tambah-ankual', [AnKualController::class, 'addAnkual'])->name('tambah_ankual');
Route::post('/dashboard/ankual/{id}/edit', [AnKualController::class, 'editAnkual']);


/////////////////////////////////////////////////////////////////////////////////////////////////////////
//analisis kuantitatif page
Route::get('/dashboard/ankuan/{id}', [AnKuanController::class, 'anKuanIndex']);
Route::post('/dashboard/ankuan/tambah-agunan', [AnKuanController::class, 'addAgunan'])->name('tambah_agunan');
Route::post('/dashboard/ankuan/tambah-resiko', [AnKuanController::class, 'addResiko'])->name('tambah_resiko');
Route::post('/dashboard/ankuan/{id}/edit-agunan', [AnKuanController::class, 'editAgunan']);
Route::post('/dashboard/ankuan/{id}/edit-resiko', [AnKuanController::class, 'editResiko']);


/////////////////////////////////////////////////////////////////////////////////////////////////////////
//info keuangan page
Route::get('/dashboard/infokeuangan/{id}', [InfoKeuanganController::class, 'index']);
Route::post('/dashboard/infokeuangan/tambah', [InfoKeuanganController::class, 'addInfoKeuangan'])->name('tambah_info_keuangan');
Route::post('/dashboard/infokeuangan/{id}/edit', [InfoKeuanganController::class, 'editInfoKeuangan']);


/////////////////////////////////////////////////////////////////////////////////////////////////////////
//limit kredit page
Route::get('/dashboard/limitkredit/{id}', [LimitKreditController::class, 'index']);
Route::post('/dashboard/limitkredit/tambah', [LimitKreditController::class, 'addLimitKredit'])->name('tambah_limit_kredit');
Route::post('/dashboard/limitkredit/{id}/edit', [LimitKreditController::class, 'editLimitKredit']);


/////////////////////////////////////////////////////////////////////////////////////////////////////////
//rugi laba page
Route::get('/dashboard/rugilaba/{id}', [RugiLabaController::class, 'index']);


/////////////////////////////////////////////////////////////////////////////////////////////////////////
//rekomendasi page
Route::get('/dashboard/rekomendasi/{id}', [RekomendasiController::class, 'index']);
Route::post('/dashboard/rekomendasi/tambah', [RekomendasiController::class, 'addRekomendasi'])->name('tambah_rekomendasi');
Route::post('/dashboard/rekomendasi/{id}/edit', [RekomendasiController::class, 'editRekomendasi']);


Route::get('/dashboard/neraca', function () {
    return view('neraca',[
        'nasabah' => null
    ]);
});


/////////////////////////////////////////////////////////////////////////////////////////////////////////
//Daftar angsuran page
Route::get('/dashboard/daftarangsuran/{id}', [AngsuranController::class, 'index']);


/////////////////////////////////////////////////////////////////////////////////////////////////////////
// authentication
Route::get('/login', function(){
    return view('login');
})->name('login_page');
Route::post("/login/authenticate", [AuthenticateController::class, 'authenticate'])->name('login');
Route::post("/logout", [AuthenticateController::class, 'logout'])->name('logout');
Route::get('/register', function(){
    return view('register');
})->name('register_page');
Route::post('/register', [AuthenticateController::class, 'register'])->name('register');


/////////////////////////////////////////////////////////////////////////////////////////////////////////
//user management page
Route::get('/dashboard/user', [UserController::class, 'index']);
Route::post('/dashboard/user/tambah-user', [UserController::class, 'addUser'])->name('tambah_user');