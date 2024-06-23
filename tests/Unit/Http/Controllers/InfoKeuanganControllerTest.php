<?php

namespace Tests\Unit\Http\Controllers;

use Tests\TestCase;
use App\Models\TCapacity;
use App\Models\TCapital;
use App\Models\TKeuangan;
use App\Models\TLimitkredit;
use App\Models\TNasabah;
use App\Models\TRugilaba;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Request;

class InfoKeuanganControllerTest extends TestCase
{
    use RefreshDatabase;

    public function testAddInfoKeuangan()
    {
        $nasabah = TNasabah::factory()->create();
        $request = Request::create('/addInfoKeuangan', 'POST', [
            'id' => $nasabah->ID_NASABAH,
            'omset' => '1.000.000',
            'biaya_gaji' => '500.000',
            'biaya_bahan_baku' => '200.000',
            'biaya_produksi' => '100.000',
            'biaya_transportasi' => '50.000',
            'biaya_usaha_lain' => '30.000',
            'biaya_rt_listrik' => '20.000',
            'biaya_rt_transportasi' => '10.000',
            'biaya_rt_sekolah' => '5.000',
            'biaya_rt_makan' => '2.000',
            'biaya_rt_pemeliharaan' => '1.000',
            'biaya_rt_lain' => '500',
            'angs_bank_umum' => '300.000',
            'angs_bpr' => '200.000',
            'angs_leasing' => '100.000',
            'angs_koperasi' => '50.000',
            'angs_lain' => '30.000',
            'pendapatan_lain' => '20.000',
            'biaya_angsuran_lain' => '10.000',
            'total_biaya' => '1.000.000',
            'total_biaya_rt' => '500.000',
            'total_angsuran' => '300.000'
        ]);

        $response = $this->post(route('tambah_info_keuangan'), $request->all());
        $response->assertRedirect();
    }
}
