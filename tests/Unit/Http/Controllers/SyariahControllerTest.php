<?php

namespace Tests\Unit\Http\Controllers;

use Tests\TestCase;
use Illuminate\Http\Request;
use App\Models\TNasabah;
use App\Models\TSyariah;
use App\Models\TScoring;
use App\Http\Controllers\SyariahController;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class SyariahControllerTest extends TestCase
{
    use RefreshDatabase, WithoutMiddleware;

    public function testIndex()
    {
        $id = '123';
        $nasabah = TNasabah::factory()->create(['ID_NASABAH' => $id]);
        $syariah_nasabah = TSyariah::factory()->create(['ID_NASABAH' => $id]);
        $hasil_scoring = TScoring::factory()->create(['ID_NASABAH' => $id, 'SYARIAH' => 85]);

        $response = $this->get("/syariah/{$id}");

        $response->assertStatus(302);
    }

    public function testSubmitSyariah()
    {
        $data = [
            'sertifikasi' => '1',
            'jumlah_hutang' => '50',
            'akad_usaha' => '1',
            'jenis_barang_usaha' => '1',
            'presentase' => '25',
            'id' => '123'
        ];

        $response = $this->post('/syariah/submitSyariah', $data);

        $response->assertRedirect();
        
    }
}
