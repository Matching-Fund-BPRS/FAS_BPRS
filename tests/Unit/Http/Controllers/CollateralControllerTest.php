<?php

namespace Tests\Unit\Http\Controllers;

use App\Http\Controllers\CollateralController;
use App\Models\TCollateral;
use App\Models\TNasabah;
use App\Models\TScoring;
use App\Models\TAgunan;
use App\Models\TResiko;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

use Illuminate\Foundation\Testing\WithoutMiddleware;

class CollateralControllerTest extends TestCase
{
    use RefreshDatabase, WithoutMiddleware;

    public function testIndex()
    {
        $id = 1;
        $collateral = TCollateral::factory()->create(['ID_NASABAH' => $id]);
        $nasabah = TNasabah::factory()->create(['ID_NASABAH' => $id]);
        $agunan = TAgunan::factory()->create(['ID_NASABAH' => $id]);
        $resiko = TResiko::factory()->create(['ID_NASABAH' => $id]);
        $scoring = TScoring::factory()->create(['ID_NASABAH' => $id, 'COLLATERAL' => 100]);

        $response = $this->get("/dashboard/5collateral/{$id}");

        $response->assertStatus(200);
        $response->assertViewIs('5collateral');

    }

    public function testSubmitCollateral()
    {
        $data = [
            'ca_nilai_agunan' => '3',
            'pengikatan' => '3',
            'leg_usaha' => 1,
            'marketability' => 1,
            'kepemilikan' => 1,
            'penguasaan' => 1,
            'id' => 1
        ];

        Http::fake([
            'model:9000/collateral' => Http::response(['data' => ['percentage' => 75]], 200)
        ]);

        $response = $this->post('/dashboard/5collateral/submitCollateral', $data);

        $response->assertRedirect();
    }

    public function testUpdate()
    {
        $id = 1;
        $data = [
            'ca_nilai_agunan' => '2',
            'pengikatan' => '2',
            'leg_usaha' => 0,
            'marketability' => 1,
            'kepemilikan' => 1,
            'penguasaan' => 1
        ];

        Http::fake([
            'model:9000/collateral' => Http::response(['data' => ['percentage' => 50]], 200)
        ]);

        $response = $this->post("/dashboard/5collateral/{$id}/update", $data);

        $response->assertRedirect();

    }
    public function testSubmitCollateralFailed()
    {
        $data = [
            'ca_nilai_agunan' => '3',
            'pengikatan' => '3',
            'leg_usaha' => 1,
            'marketability' => 1,
            'kepemilikan' => 1,
            'penguasaan' => 1,
            'id' => 1
        ];

        Http::fake([
            'model:9000/collateral' => Http::response(['data' => ['percentage' => 75]], 200)
        ]);

        $response = $this->post('/dashboard/5collateral/submitCollateral', $data);

        $response->assertRedirect();
    }

    public function testUpdateFailed()
    {
        $id = 1;
        $data = [
            'ca_nilai_agunan' => '2',
            'pengikatan' => '2',
            'leg_usaha' => 0,
            'marketability' => 1,
            'kepemilikan' => 1,
            'penguasaan' => 1
        ];

        Http::fake([
            'model:9000/collateral' => Http::response(['data' => ['percentage' => 50]], 200)
        ]);

        $response = $this->post("/dashboard/5collateral/{$id}/update", $data);

        $response->assertRedirect();

    }
}
