<?php

namespace Tests\Unit\Http\Controllers;

use Tests\TestCase;
use App\Models\TCapacity;
use App\Models\TCapital;
use App\Models\TLimitkredit;
use App\Models\TNasabah;
use App\Models\TRugilaba;
use Illuminate\Foundation\Testing\RefreshDatabase;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Http\Request;

class LimitKeuanganControllerTest extends TestCase
{
    use RefreshDatabase, WithoutMiddleware;


    public function testIndex()
    {
        $nasabah = TNasabah::factory()->create();
        $limitKredit = TLimitKredit::factory()->create(['ID_NASABAH' => $nasabah->ID_NASABAH]);
        $rugiLaba = TRugiLaba::factory()->create(['ID_NASABAH' => $nasabah->ID_NASABAH]);

        $response = $this->get(route('limitkredit', ['id' => $nasabah->ID_NASABAH]));

        $response->assertStatus(200);
    }

    public function testAddLimitKredit()
    {
        $nasabah = TNasabah::factory()->create();
        $request = Request::create(route('tambah_limit_kredit'), 'POST', [
            'id' => $nasabah->ID_NASABAH,
            'omset' => '1000000',
            'hpp' => '500000',
            'total_biaya_ops_nonops' => '200000',
            'angsuran_bank_lain' => '100000',
            'pendapatan_lain' => '50000',
            'biaya_lain' => '30000',
            'limit_kredit' => '2000000',
            'angsuran' => '100000',
            'jangka_waktu' => '12',
            'margin' => '10',
            'rpc' => '5',
            'biaya_pajak' => '20000',
            'sifat' => '1'
        ]);

        $response = $this->post(route('tambah_limit_kredit'), $request->all());

        $response->assertRedirect();
    }

    public function testEditLimitKredit()
    {
        $nasabah = TNasabah::factory()->create();
        $limitKredit = TLimitKredit::factory()->create(['ID_NASABAH' => $nasabah->ID_NASABAH]);

        $request = Request::create('tambah_limit_kredit', 'POST', [
            'limit_kredit' => '3000000',
            'jangka_waktu' => '24',
            'omset' => '1500000',
            'hpp' => '700000',
            'angsuran_bank_lain' => '150000',
            'angsuran' => '200000',
            'pendapatan_lain' => '60000',
            'rpc' => '10',
            'biaya_lain' => '40000'
        ]);

        $response = $this->post(route('edit_limit_kredit', ['id' => $nasabah->ID_NASABAH]), $request->all());


        $response->assertRedirect();
    }
    public function testAddLimitKreditFailed()
    {
        $nasabah = TNasabah::factory()->create();
        $request = Request::create(route('tambah_limit_kredit'), 'POST', [
            'id' => $nasabah->ID_NASABAH,
            'omset' => '1000000',
            'hpp' => '500000',
            'total_biaya_ops_nonops' => '200000',
            'angsuran_bank_lain' => '100000',
            'pendapatan_lain' => '50000',
            'biaya_lain' => '30000',
            'limit_kredit' => '2000000',
            'angsuran' => '100000',
            'jangka_waktu' => '12',
            'margin' => '10',
            'rpc' => '5',
            'biaya_pajak' => '20000',
            'sifat' => '1'
        ]);

        $response = $this->post(route('tambah_limit_kredit'), $request->all());

        $response->assertRedirect();
    }

    public function testEditLimitKreditFailed()
    {
        $nasabah = TNasabah::factory()->create();
        $limitKredit = TLimitKredit::factory()->create(['ID_NASABAH' => $nasabah->ID_NASABAH]);

        $request = Request::create('tambah_limit_kredit', 'POST', [
            'limit_kredit' => '3000000',
            'jangka_waktu' => '24',
            'omset' => '1500000',
            'hpp' => '700000',
            'angsuran_bank_lain' => '150000',
            'angsuran' => '200000',
            'pendapatan_lain' => '60000',
            'rpc' => '10',
            'biaya_lain' => '40000'
        ]);

        $response = $this->post(route('edit_limit_kredit', ['id' => $nasabah->ID_NASABAH]), $request->all());


        $response->assertRedirect();
    }
}
