<?php

namespace Tests\Unit\Http\Controllers;

use Tests\TestCase;
use App\Models\ReffBank;
use App\Models\ReffSandiBi;
use App\Models\ReffSandiSid;
use Illuminate\Http\Request;
use App\Models\TFa;
use App\Models\TBisid;
use App\Models\TNasabah;
use App\Models\TBmpd;
use App\Http\Controllers\FasExistController;
use Illuminate\Foundation\Testing\RefreshDatabase;

class FasExistControllerTest extends TestCase
{
    use RefreshDatabase;

    public function testExtractTextBeforeHyphen()
    {
        $controller = new FasExistController();
        $result = $controller->extractTextBeforeHyphen('example - text');
        $this->assertEquals('example', $result);

        $result = $controller->extractTextBeforeHyphen('example');
        $this->assertEquals('example', $result);

        $result = $controller->extractTextBeforeHyphen('');
        $this->assertEquals('', $result);
    }

    public function testFasIndex()
    {
        $nasabah = TNasabah::factory()->create();
        $response = $this->get(route('fasilitasexisting', ['id' => $nasabah->ID_NASABAH]));

        $response->assertStatus(302);
    }

    public function testTambahBisid()
    {
        $request = Request::create('/tambah_bisid', 'POST', [
            'id' => 1,
            'sektor_ekonomi_bi' => '1',
            'penggunaan_bi' => '2',
            'golongan_debitur_bi' => '100',
            'sifat_bi' => '2300',
            'golongan_penjamin_bi' => '1200',
            'tujuan_penggunaan_bi' => '1001',
            'golongan_piutang_bi' => '1009',
            'sifat_plafond_bi' => '1',
            'sektor_ekonomi_sid' => '1',
            'penggunaan_sid' => '2000',
            'pembiayaan_sid' => '1003',
            'modal_inti_cab' => 1000,
            'modal_inti_pusat' => 2000,
            'modal_pelengkap_cab' => 3000,
            'modal_pelengkap_pusat' => 4000,
            'bmpd_perorg_cab' => 5000,
            'bmpd_perorg_pusat' => 6000,
            'bmpd_kel_cab' => 7000,
            'bmpd_kel_pusat' => 8000,
            'bmpd_terkait_cab' => 9000,
            'bmpd_terkait_pusat' => 1,
            'plafond_cab' => 11000,
            'plafond_pusat' => 12000,
        ]);

        $response = $this->post(route('tambah_bisid'), $request->all());
        $response->assertRedirect();
    }

    public function testEditBisid()
    {
        $nasabah = TNasabah::factory()->create();
        $bisid = TBisid::factory()->create(['ID_NASABAH' => $nasabah->ID_NASABAH]);
        $bmpd = TBmpd::factory()->create(['ID_NASABAH' => $nasabah->ID_NASABAH]);

        $request = Request::create('/edit_bisid', 'POST', [
            'sektor_ekonomi_bi' => 'sektor - ekonomi',
            'penggunaan_bi' => '2',
            'golongan_debitur_bi' => '100',
            'sifat_bi' => '2300',
            'golongan_penjamin_bi' => '1200',
            'tujuan_penggunaan_bi' => '1001',
            'golongan_piutang_bi' => '1009',
            'sifat_plafond_bi' => '1',
            'sektor_ekonomi_sid' => 'sektor - ekonomi',
            'penggunaan_sid' => '2000',
            'pembiayaan_sid' => '1003',
            'modal_inti_cab' => 1000,
            'modal_inti_pusat' => 2000,
            'modal_pelengkap_cab' => 3000,
            'modal_pelengkap_pusat' => 4000,
            'bmpd_perorg_cab' => 5000,
            'bmpd_perorg_pusat' => 6000,
            'bmpd_kel_cab' => 7000,
            'bmpd_kel_pusat' => 8000,
            'bmpd_terkait_cab' => 9000,
            'bmpd_terkait_pusat' => 1,
            'plafond_cab' => 11000,
            'plafond_pusat' => 12000,
        ]);

        $response = $this->post(route('edit_bisid', ['id' => $nasabah->ID_NASABAH]), $request->all());
        $response->assertRedirect();
    }

    public function testStore()
    {
        $nasabah = TNasabah::factory()->create();
        $request = Request::create(route('tambah_existing'), 'POST', [
            'id' => 1,
            'bank' => '001',
            'jenis_kredit' => 'Kredit',
            'plafond' => '100',
            'baki_debet' => '500000',
            'tgl_jatuh_tempo' => '2023-12-31',
            'kol' => '1',
            'tunggakan' => '1',
            'lama_tunggakan' => '30',
        ]);

        ReffBank::factory()->create(['KODE' => '001', 'BANK' => 'Bank Test']);

        $response = $this->post(route('tambah_existing'), $request->all());
        $response->assertRedirect();
    }

    public function testEditExisting()
    {
        $fa = TFa::factory()->create();

        $request = Request::create('/edit_existing', 'POST', [
            'bank' => '001',
            'jenis_kredit' => 'Kredit',
            'plafond' => '2000000',
            'baki_debet' => '100',
            'tgl_jatuh_tempo' => '2024-12-31',
            'kol' => '2',
            'tunggakan' => '20000',
            'lama_tunggakan' => '60',
        ]);

        ReffBank::factory()->create(['KODE' => '001', 'BANK' => 'Bank Test']);

        $response = $this->post(route('edit_existing', ['id' => $fa->ID]), $request->all());
        $response->assertRedirect();
    }

    public function testDeleteExisting()
    {
        $fa = TFa::factory()->create();

        $response = $this->post(route('delete_existing', ['id' => $fa->ID]));
        $response->assertRedirect();
    }
}
