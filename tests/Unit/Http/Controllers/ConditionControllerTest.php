<?php

namespace Tests\Unit\Http\Controllers;

use Tests\TestCase;
use Illuminate\Http\Request;
use App\Models\TCondition;
use App\Models\TNasabah;
use App\Models\TScoring;
use Illuminate\Support\Facades\Http;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
class ConditionControllerTest extends TestCase
{
    use RefreshDatabase, WithoutMiddleware;

    public function testIndex()
    {
        $nasabah = TNasabah::factory()->create();
        $condition = TCondition::factory()->create(['ID_NASABAH' => $nasabah->ID_NASABAH]);
        $scoring = TScoring::factory()->create(['ID_NASABAH' => $nasabah->ID_NASABAH]);

        $response = $this->get(route('5condition', ['id' => $nasabah->ID_NASABAH]));

        $response->assertStatus(200);

    }

    public function testUpdate()
    {
        $nasabah = TNasabah::factory()->create();
        $condition = TCondition::factory()->create(['ID_NASABAH' => $nasabah->ID_NASABAH]);
        $scoring = TScoring::factory()->create(['ID_NASABAH' => $nasabah->ID_NASABAH]);

        $request = Request::create(route('updateCondition', ['id' => $nasabah->ID_NASABAH]), 'POST', [
            'cu_pasokan' => 10,
            'cu_konsumen' => 5,
            'pem_ketergantungan' => 8,
            'pem_kebutuhan' => 7,
            'cu_kecakapan' => 6,
            'cu_eksternal' => 9,
            'id' => $nasabah->ID_NASABAH,
        ]);

        Http::fake([
            'model/condition' => Http::response(['data' => ['percentage' => 75]], 200)
        ]);

        $response = $this->post(route('updateCondition', ['id' => $nasabah->ID_NASABAH]), $request->all());

        $response->assertStatus(200);
    }

    public function testSubmitCondition()
    {
        $nasabah = TNasabah::factory()->create();
        $request = Request::create(route('postCondition'), 'POST', [
            'cu_pasokan' => 10,
            'cu_konsumen' => 5,
            'pem_ketergantungan' => 8,
            'pem_kebutuhan' => 7,
            'cu_kecakapan' => 6,
            'cu_eksternal' => 9,
            'id' => $nasabah->ID_NASABAH,
        ]);

        Http::fake([
            'model/condition' => Http::response(['data' => ['percentage' => 80]], 200)
        ]);

        $response = $this->post(route('postCondition'), $request->all());

        $response->assertStatus(200);
    }
}

