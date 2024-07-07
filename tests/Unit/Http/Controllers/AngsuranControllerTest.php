<?php

namespace Tests\Unit\Http\Controllers;

use Tests\TestCase;
use App\Models\TAngsuran;
use App\Models\TNasabah;
use App\Models\TRekomendasi;
use Illuminate\Foundation\Testing\RefreshDatabase;

use Illuminate\Foundation\Testing\WithoutMiddleware;
class AngsuranControllerTest extends TestCase
{
    use RefreshDatabase, WithoutMiddleware;


    public function testIndex()
    {
        $nasabah = TNasabah::factory()->create(['ID_NASABAH' => '123']);
        $rekomendasi = TRekomendasi::factory()->create([
            'ID_NASABAH' => '123',
            'LIMIT_KREDIT' => 1000000,
            'BUNGA' => 5,
            'JANGKA_WAKTU' => 12
        ]);
        $angsuran = TAngsuran::factory()->create(['ID_NASABAH' => '123']);

        $response = $this->get(route('angsuran', ['id' => '123']));
        
        $response->assertStatus(200);
    }

    public function testIndexWithoutRekomendasi()
    {
        $nasabah = TNasabah::factory()->create(['ID_NASABAH' => '123']);

        $response = $this->get(route('angsuran', ['id' => '123']));
        
        $response->assertRedirect();
    }
    public function testIndexKosong()
    {
        $nasabah = TNasabah::factory()->create(['ID_NASABAH' => '123']);
        $rekomendasi = TRekomendasi::factory()->create([
            'ID_NASABAH' => '123',
            'LIMIT_KREDIT' => 1000000,
            'BUNGA' => 5,
            'JANGKA_WAKTU' => 12
        ]);
        $angsuran = TAngsuran::factory()->create(['ID_NASABAH' => '123']);

        $response = $this->get(route('angsuran', ['id' => '123']));
        
        $response->assertStatus(200);
    }

}

