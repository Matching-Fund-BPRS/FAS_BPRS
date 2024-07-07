<?php

namespace Tests\Unit\Http\Controllers;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\Request;
use App\Models\TNeraca;
use App\Models\TNasabah;
use App\Models\TCapital;
use Carbon\Carbon;
class NeracaControllerTest extends TestCase
{
    use RefreshDatabase, WithFaker,WithoutMiddleware;

    public function testIndex()
    {
        $nasabah = TNasabah::factory()->create(['ID_NASABAH' => 1]);
        $neraca = TNeraca::factory()->create(['ID_NASABAH' => 1]);

        $response = $this->get(route('neraca', ['id' => 1]));

        $response->assertStatus(200);
        $response->assertViewIs('neraca');
    }

    public function testAddNeraca()
    {
        $request = Request::create(route('tambah_neraca'), 'POST', [
            'id' => 1,
            'kas' => '1.000.000',
            'piutang_dagang' => '500.000',
            'persediaan' => '750.000',
            'tanah' => '2.000.000',
            'gedung' => '3.500.000',
            'penyusutan_gedung' => '200.000',
            'peralatan' => '1.200.000',
            'penyusutan_peralatan' => '150.000',
            'hutang_jangka_pendek' => '800.000',
            'hutang_jangka_panjang' => '1.000.000',
            'modal' => '5.000.000',
            'laba_ditahan' => '300.000',
            'laba_berjalan' => '400.000',
            'tgl_periode' => '2021-06-01'
        ]);

        $response = $this->post(route('tambah_neraca'), $request->all());

        $response->assertRedirect();

    }
    public function testIndexFailed()
    {
        $nasabah = TNasabah::factory()->create(['ID_NASABAH' => 1]);
        $neraca = TNeraca::factory()->create(['ID_NASABAH' => 1]);

        $response = $this->get(route('neraca', ['id' => 1]));

        $response->assertStatus(200);
        $response->assertViewIs('neraca');
    }

    public function testAddNeracaFailed()
    {
        $request = Request::create(route('tambah_neraca'), 'POST', [
            'id' => 1,
            'kas' => '1.000.000',
            'piutang_dagang' => '500.000',
            'persediaan' => '750.000',
            'tanah' => '2.000.000',
            'gedung' => '3.500.000',
            'penyusutan_gedung' => '200.000',
            'peralatan' => '1.200.000',
            'penyusutan_peralatan' => '150.000',
            'hutang_jangka_pendek' => '800.000',
            'hutang_jangka_panjang' => '1.000.000',
            'modal' => '5.000.000',
            'laba_ditahan' => '300.000',
            'laba_berjalan' => '400.000',
            'tgl_periode' => '2021-06-01'
        ]);

        $response = $this->post(route('tambah_neraca'), $request->all());

        $response->assertRedirect();

    }
}
