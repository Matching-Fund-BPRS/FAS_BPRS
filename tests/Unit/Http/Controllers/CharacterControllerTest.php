<?php

namespace Tests\Unit\Http\Controllers;

use Tests\TestCase;
use Illuminate\Http\Request;
use App\Models\TCharacter;
use App\Models\TNasabah;
use App\Models\TScoring;
use Illuminate\Support\Facades\Http;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class CharacterControllerTest extends TestCase
{
    use RefreshDatabase, WithoutMiddleware;

    public function testIndex()
    {
        $id = '123';
        $character_nasabah = TCharacter::factory()->create(['ID_NASABAH' => $id]);
        $nasabah = TNasabah::factory()->create(['ID_NASABAH' => $id]);
        $tscoring = TScoring::factory()->create(['ID_NASABAH' => $id, 'CHARACTER' => 85]);

        $response = $this->get("/dashboard/5character/{$id}");

        $response->assertStatus(200);
    }

    public function testSubmitCharacter()
    {
        $data = [
            'man_kemauan' => '5',
            'man_kejujuran' => '4',
            'man_reputasi' => '3',
            'cw_tanggung' => '2',
            'cw_terbuka' => '1',
            'cw_disiplin' => '3',
            'cw_janji' => '4',
            'pu_integritas' => '5',
            'pu_account_behavior' => '2',
            'id' => '123'
        ];

        Http::fake([
            'http://34.50.77.175:8000/character' => Http::response(['data' => ['percentage' => 75]], 200)
        ]);

        $response = $this->post('/dashboard/5character/submitCharacter', $data);

        $response->assertRedirect();
    }

    public function testUpdate()
    {
        $id = '123';
        $data = [
            'man_kemauan' => '5',
            'man_kejujuran' => '4',
            'man_reputasi' => '3',
            'cw_tanggung' => '2',
            'cw_terbuka' => '1',
            'cw_disiplin' => '3',
            'cw_janji' => '4',
            'pu_integritas' => '5',
            'pu_account_behavior' => '2'
        ];

        Http::fake([
            'http://34.50.77.175:8000/character' => Http::response(['data' => ['percentage' => 80]], 200)
        ]);

        $response = $this->post("/dashboard/5character/{$id}/edit", $data);

        $response->assertRedirect();

    }
}

