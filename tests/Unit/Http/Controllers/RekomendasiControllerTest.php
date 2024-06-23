<?php

namespace Tests\Unit\Http\Controllers;

use Tests\TestCase;
use Illuminate\Http\Request;
use App\Models\TAngsuran;
use App\Models\TRekomendasi;
use App\Models\TNasabah;
use App\Models\TRugilaba;
use App\Models\TScoring;
use App\Http\Controllers\RekomendasiController;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class RekomendasiControllerTest extends TestCase
{
    use RefreshDatabase, WithoutMiddleware;



    public function testAddRekomendasi()
    {
        $request = Request::create('/rekomendasi/add', 'POST', [
            'id' => 1,
            'plafond' => '100.000',
            'angsuran_bulan' => '10.000',
            'provisi' => '5.000',
            'administrasi' => '3.000',
            'biaya_lainnya' => '2.000',
            'biaya_materai' => '1.000',
            'biaya_notaris' => '1.500',
            'biaya_asuransi' => '2.500',
            'jangka_waktu' => 12,
            'margin' => 5,
            'bayar_pokok' => 10000,
            'bagi_hasil_bank' => 60,
            'bagi_hasil_mudharib' => 40,
            'tipe_angsuran' => 1
        ]);

        $controller = new RekomendasiController();
        $response = $controller->addRekomendasi($request);

        $this->assertEquals(302, $response->getStatusCode());
        $this->assertEquals('message', session('success-add'));

    }

    public function testEditRekomendasi()
    {
        $request = Request::create('/rekomendasi/edit/1', 'POST', [
            'id' => 1,
            'plafond' => '100.000',
            'angsuran_bulan' => '10.000',
            'provisi' => '5.000',
            'administrasi' => '3.000',
            'biaya_lainnya' => '2.000',
            'biaya_materai' => '1.000',
            'biaya_notaris' => '1.500',
            'biaya_asuransi' => '2.500',
            'jangka_waktu' => 12,
            'margin' => 5,
            'bayar_pokok' => 10000,
            'bagi_hasil_bank' => 60,
            'bagi_hasil_mudharib' => 40,
            'tipe_angsuran' => 1
        ]);

        $controller = new RekomendasiController();
        $response = $controller->editRekomendasi($request, 1);

        $this->assertEquals(302, $response->getStatusCode());
        $this->assertEquals('message', session('success-edit'));

    }

}
                         