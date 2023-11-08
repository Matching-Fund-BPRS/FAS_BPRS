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
use App\Http\Controllers\CharacterController;
use App\Http\Controllers\CapacityController;
use App\Http\Controllers\CollateralController;
use App\Http\Controllers\ConditionController;
use App\Http\Controllers\CapitalController;
use App\Http\Controllers\SyariahController;
use App\Http\Controllers\NeracaController;

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
Route::group(['middleware'=>'auth'], function(){
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
    Route::post('/dashboard/fasilitasexisting/{id}/edit', [FasExistController::class, 'edit_bisid']);


    /////////////////////////////////////////////////////////////////////////////////////////////////////////
    //analisisa kualitatif page
    Route::get('/dashboard/ankual/{id}', [AnKualController::class, 'index']);
    Route::post('/dashboard/ankual/tambah-ankual', [AnKualController::class, 'addAnkual'])->name('tambah_ankual');
    Route::post('/dashboard/ankual/{id}/edit', [AnKualController::class, 'editAnkual']);


    /////////////////////////////////////////////////////////////////////////////////////////////////////////
    //analisis kuantitatif page
    Route::get('/dashboard/ankuan/{id}', [AnKuanController::class, 'anKuanIndex']);


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

    //capacity
    Route::get('/dashboard/5capacity/{id}', [CapacityController::class, 'index'])->name('5capacity');
    Route::post('/dashboard/5capacity/{id}/edit', [CapacityController::class, 'update']);
    Route::post('/dashboard/5capacity/submitCapacity', [CapacityController::class, 'submitCapacity'])->name('postCapacity');

    //collateral
    Route::get('/dashboard/5collateral/{id}', [CollateralController::class, 'index'])->name('5collateral');
    Route::post('/dashboard/5collateral/{id}/edit', [CollateralController::class, 'update']);
    Route::post('/dashboard/5collateral/submitCollateral', [CollateralController::class, 'submitCollateral'])->name('postCollateral');
    Route::post('/dashboard/5collateral/tambah-agunan', [CollateralController::class, 'addAgunan'])->name('tambah_agunan');
    Route::post('/dashboard/5collateral/tambah-resiko', [CollateralController::class, 'addResiko'])->name('tambah_resiko');
    Route::post('/dashboard/5collateral/{id}/edit-agunan', [CollateralController::class, 'editAgunan']);
    Route::post('/dashboard/5collateral/{id}/edit-resiko', [CollateralController::class, 'editResiko']);

    //condition
    Route::get('/dashboard/5condition/{id}', [ConditionController::class, 'index'])->name('5condition');
    Route::post('/dashboard/5condition/{id}/edit', [ConditionController::class, 'update'])->name('updateCondition');
    Route::post('/dashboard/5condition/submitCondition', [ConditionController::class, 'submitCondition'])->name('postCondition');

    //capital
    Route::get('/dashboard/5capital/{id}', [CapitalController::class, 'index'])->name('5capital');
    Route::post('/dashboard/5capital/{id}/edit', [CapitalController::class, 'update'])->name('updateCapital');
    Route::post('/dashboard/5capital/submitCapital', [CapitalController::class, 'submitCapital'])->name('postCapital');

    //character
    Route::get('/dashboard/5character/{id}', [CharacterController::class, 'index'])->name('5character');
    Route::post('/dashboard/5character/{id}/edit', [CharacterController::class, 'update']);
    Route::post('/dashboard/5character/submitCharacter', [CharacterController::class, 'submitCharacter'])->name('postCharacter');

    //syariah
    Route::get('/dashboard/5syariah/{id}', [SyariahController::class, 'index']);
    Route::post('/dashboard/5syariah/tambah', [SyariahController::class, 'submitSyariah']);

    /////////////////////////////////////////////////////////////////////////////////////////////////////////
    //rugi laba page
    Route::get('/dashboard/rugilaba/{id}', [RugiLabaController::class, 'index']);
    Route::post('/dashboard/rugilaba/tambah', [RugiLabaController::class, 'addRugiLaba']);


    /////////////////////////////////////////////////////////////////////////////////////////////////////////
    //rekomendasi page
    Route::get('/dashboard/rekomendasi/{id}', [RekomendasiController::class, 'index']);
    Route::post('/dashboard/rekomendasi/tambah', [RekomendasiController::class, 'addRekomendasi'])->name('tambah_rekomendasi');
    Route::post('/dashboard/rekomendasi/{id}/edit', [RekomendasiController::class, 'editRekomendasi']);


    Route::get('/dashboard/neraca/{id}', [NeracaController::class, 'index']);
    Route::get('/dashboard/neraca/tambah', [NeracaController::class, 'addNeraca']);

    /////////////////////////////////////////////////////////////////////////////////////////////////////////
    //Daftar angsuran page
    Route::get('/dashboard/daftarangsuran/{id}', [AngsuranController::class, 'index']);


    /////////////////////////////////////////////////////////////////////////////////////////////////////////
    //user management page
    Route::get('/dashboard/user', [UserController::class, 'index']);
    Route::post('/dashboard/user/tambah-user', [UserController::class, 'addUser'])->name('tambah_user');
    Route::delete('/dashboard/user/delete-user', [UserController::class, 'deleteUser'])->name('delete-user');
});

/////////////////////////////////////////////////////////////////////////////////////////////////////////
// authentication
Route::group(['middleware'=>'guest'], function(){
    Route::get('/login', function(){
        return view('login');
    })->name('login');
    Route::post("/login/authenticate", [AuthenticateController::class, 'authenticate'])->name('authenticate');
});
Route::post("/logout", [AuthenticateController::class, 'logout'])->name('logout');
// Route::get('/register', function(){
//     return view('register');
// })->name('register_page');
// Route::post('/register', [AuthenticateController::class, 'register'])->name('register');
