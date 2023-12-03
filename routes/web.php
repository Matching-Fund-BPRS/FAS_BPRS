<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthenticateController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NasabahController;
use App\Http\Controllers\FasExistController;
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
use App\Http\Controllers\SettingController;
use App\Models\ReffBank;
use App\Models\ReffSandiBi;
use App\Models\ReffSandiSid;
use OpenSpout\Common\Entity\Row;

Route::group(['middleware'=>'auth'], function(){
    Route::get('/', function () {
        return view('dashboard', [
            'nasabah' => null
        ]);
    })->name('home');

    Route::get('/dashboard/danolisa', [NasabahController::class, 'index'])->name('danolisa');
    Route::get('/dashboard/danolisa/data', [NasabahController::class, 'data'])->name('danolisa-data');

    //////////////////////////////////////////////////////////////////////////////
    // DATA ENTRY PAGE
    Route::post('/dashboard/detaildata/tambah-nasabah', [NasabahController::class, 'tambah_nasabah'])->name("tambah_nasabah");
    Route::post('/dashboard/detaildata/{id}/edit', [NasabahController::class, 'edit_data_nasabah'])->name("edit_data_nasabah");

    Route::get('/dashboard/detaildata', function () {
        return view('detaildataentryBU',[
            'nasabah' => null,
            'id' => null,
        ]);
    });
    Route::get('/dashboard/detaildata/{id}', [NasabahController::class, 'data_nasabah']);
    Route::get('/dashboard/detaildataBU', function () {
        return view('detaildataentryBU', [
            'nasabah' => null,
            'id'=> null
        ]);
    });
    
    Route::get('/dashboard/detaildataBU/{id}', [NasabahController::class, 'data_usaha_nasabah']);
    Route::get('/dashboard/detailnota', [NasabahController::class, 'searchNasabah'])->name("search-id");
    Route::post('/dashboard/detaildataBU/pengurus', [NasabahController::class, 'tambah_pengurus'])->name("tambah_pengurus");
    Route::post('/dashboard/detaildataBU/pengurus/{id}/edit', [NasabahController::class, 'edit_pengurus']);
    Route::post('/dashboard/detaildataBU/pengurus/{id}/delete', [NasabahController::class, 'delete_pengurus']);

    //////////////////////////////////////////////////////////////////////////////
    // FASILITAS EXISTING PAGE
    Route::get('/dashboard/fasilitasexisting/{id}', [FasExistController::class, 'fasIndex']);
    Route::post('/dashboard/fasilitasexisting/tambah_bisid', [FasExistController::class, 'tambah_bisid'])->name("tambah_bisid");
    Route::post('/dashboard/fasilitasexisting/{id}/edit', [FasExistController::class, 'edit_bisid']);
    Route::post('/dashboard/fasilitasexisting/add', [FasExistController::class, 'store'])->name("tambah_existing");
    Route::post('/dashboard/fasilitasexisting/{id}/update', [FasExistController::class, 'edit_existing']);
    Route::post('/dashboard/fasilitasexisting/{id}/delete', [FasExistController::class, 'delete_existing']);

    // /////////////////////////////////////////////////////////////////////////////////////////////////////////
    // //
    // Route::get('/dashboard/ankual/{id}', [AnKualController::class, 'index']);
    // Route::post('/dashboard/ankual/tambah-ankual', [AnKualController::class, 'addAnkual'])->name('tambah_ankual');
    // Route::post('/dashboard/ankual/{id}/edit', [AnKualController::class, 'editAnkual']);


    // /////////////////////////////////////////////////////////////////////////////////////////////////////////
    // //analisis kuantitatif page
    // Route::get('/dashboard/ankuan/{id}', [AnKuanController::class, 'anKuanIndex']);


    /////////////////////////////////////////////////////////////////////////////////////////////////////////
    //INFO KEUANGAN PAGE
    Route::get('/dashboard/infokeuangan/{id}', [InfoKeuanganController::class, 'index']);
    Route::post('/dashboard/infokeuangan/tambah', [InfoKeuanganController::class, 'addInfoKeuangan'])->name('tambah_info_keuangan');
    Route::post('/dashboard/infokeuangan/{id}/edit', [InfoKeuanganController::class, 'editInfoKeuangan']);


    //////////////////////////////////  ANALISIS 5C    //////////////////////////////////////////////////
    //LIMIT KREDIT PAGE
    Route::get('/dashboard/limitkredit/{id}', [LimitKreditController::class, 'index']);
    Route::post('/dashboard/limitkredit/tambah', [LimitKreditController::class, 'addLimitKredit'])->name('tambah_limit_kredit');
    Route::post('/dashboard/limitkredit/{id}/edit', [LimitKreditController::class, 'editLimitKredit']);

    /////////////////////////////////////////////////////////////////////////////////////////////////////////
    //CAPACITY PAGE 
    Route::get('/dashboard/5capacity/{id}', [CapacityController::class, 'index'])->name('5capacity');
    Route::post('/dashboard/5capacity/{id}/edit', [CapacityController::class, 'update']);
    Route::post('/dashboard/5capacity/submitCapacity', [CapacityController::class, 'submitCapacity'])->name('postCapacity');

    //COLLATERAL PAGE
    Route::get('/dashboard/5collateral/{id}', [CollateralController::class, 'index'])->name('5collateral');
    Route::post('/dashboard/5collateral/{id}/edit', [CollateralController::class, 'update']);
    Route::post('/dashboard/5collateral/submitCollateral', [CollateralController::class, 'submitCollateral'])->name('postCollateral');
    Route::post('/dashboard/5collateral/tambah-agunan', [CollateralController::class, 'addAgunan'])->name('tambah_agunan');
    Route::post('/dashboard/5collateral/{id}/edit-agunan', [CollateralController::class, 'editAgunan'])->name('edit_agunan');
    Route::post('/dashboard/5collateral/{id}/delete-agunan', [CollateralController::class, 'deleteAgunan'])->name('delete_agunan');
    Route::post('/dashboard/5collateral/tambah-resiko', [CollateralController::class, 'addResiko'])->name('tambah_resiko');
    Route::post('/dashboard/5collateral/{id}/edit-agunan', [CollateralController::class, 'editAgunan']);
    Route::post('/dashboard/5collateral/{id}/edit-resiko', [CollateralController::class, 'editResiko']);

    //CONDITION PAGE
    Route::get('/dashboard/5condition/{id}', [ConditionController::class, 'index'])->name('5condition');
    Route::post('/dashboard/5condition/{id}/edit', [ConditionController::class, 'update'])->name('updateCondition');
    Route::post('/dashboard/5condition/submitCondition', [ConditionController::class, 'submitCondition'])->name('postCondition');

    //CAPITAL PAGE
    Route::get('/dashboard/5capital/{id}', [CapitalController::class, 'index'])->name('5capital');
    Route::post('/dashboard/5capital/{id}/edit', [CapitalController::class, 'update'])->name('updateCapital');
    Route::post('/dashboard/5capital/submitCapital', [CapitalController::class, 'submitCapital'])->name('postCapital');

    //CHARACTER PAGE
    Route::get('/dashboard/5character/{id}', [CharacterController::class, 'index'])->name('5character');
    Route::post('/dashboard/5character/{id}/edit', [CharacterController::class, 'update']);
    Route::post('/dashboard/5character/submitCharacter', [CharacterController::class, 'submitCharacter'])->name('postCharacter');

    //SYARIAH PAGE
    Route::get('/dashboard/5syariah/{id}', [SyariahController::class, 'index']);
    Route::post('/dashboard/5syariah/tambah', [SyariahController::class, 'submitSyariah']);

    /////////////////////////////////////////////////////////////////////////////////////////////////////////
    //RUGI LABA PAGE
    Route::get('/dashboard/rugilaba/{id}', [RugiLabaController::class, 'index']);
    Route::post('/dashboard/rugilaba/tambah', [RugiLabaController::class, 'addRugiLaba']);


    /////////////////////////////////////////////////////////////////////////////////////////////////////////
    //REKOMENDASI PAGE
    Route::get('/dashboard/rekomendasi/{id}', [RekomendasiController::class, 'index']);
    Route::post('/dashboard/rekomendasi/tambah', [RekomendasiController::class, 'addRekomendasi'])->name('tambah_rekomendasi');
    Route::post('/dashboard/rekomendasi/{id}/edit', [RekomendasiController::class, 'editRekomendasi']);


    Route::get('/dashboard/neraca/{id}', [NeracaController::class, 'index']);
    Route::post('/dashboard/neraca/tambah', [NeracaController::class, 'addNeraca']);

    /////////////////////////////////////////////////////////////////////////////////////////////////////////
    //DAFTAR ANGSURAN PAGE
    Route::get('/dashboard/daftarangsuran/{id}', [AngsuranController::class, 'index']); 
    
    ///SETTING PAGE
    Route::get('/dashboard/pengaturanBI', [SettingController::class, 'indexBI'])->name('pengaturanBI');
    Route::post('/dashboard/pengaturanBI/tambah', [SettingController::class, 'postBI'])->name('post_BI');
    
    Route::get('/dashboard/pengaturanSID', [SettingController::class, 'indexSID'])->name('pengaturanSID');
    Route::post('/dashboard/pengaturanSID/tambah', [SettingController::class, 'postSID'])->name('post_SID');

    Route::get('/dashboard/pengaturanBank', [SettingController::class, 'indexBank'])->name('pengaturanBank');
    Route::post('/dashboard/pengaturanBank/tambah', [SettingController::class, 'postBank'])->name('post_bank');

});
/////////////////////////////////////////////////////////////////////////////////////////////////////////
//USER MANAGEMENT PAGE
Route::group(['middleware'=>['auth', 'isSupervisor:1']], function(){
    Route::get('/dashboard/user', [UserController::class, 'index'])->name('user_management');
    Route::post('/dashboard/user/tambah-user', [UserController::class, 'addUser'])->name('tambah_user');
    Route::delete('/dashboard/user/delete-user', [UserController::class, 'deleteUser'])->name('delete-user');
});
Route::group(['middleware'=>['auth', 'isSupervisor:2']], function(){
    Route::get('/dashboard/user', [UserController::class, 'index'])->name('user_management');
    Route::post('/dashboard/user/tambah-user', [UserController::class, 'addUser'])->name('tambah_user');
    Route::delete('/dashboard/user/delete-user', [UserController::class, 'deleteUser'])->name('delete-user');
});

/////////////////////////////////////////////////////////////////////////////////////////////////////////
// AUTHENTICATE PAGE
Route::group(['middleware'=>'guest'], function(){
    Route::get('/login', function(){
        return view('login');
    })->name('login');
    Route::post("/login/authenticate", [AuthenticateController::class, 'authenticate'])->name('authenticate');
    Route::get('/register', function(){
        return view('register');
    })->name('register_page');
    Route::post('/register', [AuthenticateController::class, 'register'])->name('register');
});
Route::post("/logout", [AuthenticateController::class, 'logout'])->name('logout');
