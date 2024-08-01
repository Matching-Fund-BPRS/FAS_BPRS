<?php

namespace Tests\Unit\Http\Controllers;

use Tests\TestCase;
use Illuminate\Http\Request;
use App\Models\TCapacity;
use App\Models\TNasabah;
use App\Models\TScoring;
use Illuminate\Support\Facades\Http;
use Illuminate\Foundation\Testing\RefreshDatabase;

use Illuminate\Foundation\Testing\WithoutMiddleware;

class CapacityControllerTest extends TestCase
{
    use RefreshDatabase, WithoutMiddleware;


    public function testIndex()
    {
        $nasabah = TNasabah::factory()->create();
        $capacity = TCapacity::factory()->create(['ID_NASABAH' => $nasabah->ID_NASABAH]);
        $scoring = TScoring::factory()->create(['ID_NASABAH' => $nasabah->ID_NASABAH]);

        $response = $this->get(route('5capacity', ['id' => $nasabah->ID_NASABAH]));

        $response->assertStatus(200);
    }

    public function testSubmitCapacity()
    {
        $nasabah = TNasabah::factory()->create();
        $request = Request::create(route('postCapacity'), 'POST', [
            'teh_utilisasi' => 10,
            'teh_lama_usaha' => 5,
            'cb_manajemen_sdm' => 8,
            'cb_pengelolaan' => 7,
            'cb_dscr' => 6,
            'id' => $nasabah->ID_NASABAH,
        ]);

        Http::fake([
            'model:8000/capacity' => Http::response(['data' => ['percentage' => 80]], 200)
        ]);

        $response = $this->post(route('postCapacity'), $request->all());

      
        $response->assertStatus(200);
    }
    public function testSubmitCapacityFailed()
    {
        $nasabah = TNasabah::factory()->create();
        $request = Request::create(route('postCapacity'), 'POST', [
            'teh_utilisasi' => 10,
            'teh_lama_usaha' => 5,
            'cb_manajemen_sdm' => 8,
            'cb_pengelolaan' => 7,
            'cb_dscr' => 6,
            'id' => $nasabah->ID_NASABAH,
        ]);

        Http::fake([
            'model:8000/capacity' => Http::response(['data' => ['percentage' => 80]], 200)
        ]);

        $response = $this->post(route('postCapacity'), $request->all());

      
        $response->assertStatus(200);
    }


    public function testUpdate()
    {
        $nasabah = TNasabah::factory()->create();
        $capacity = TCapacity::factory()->create(['ID_NASABAH' => $nasabah->ID_NASABAH]);
        $scoring = TScoring::factory()->create(['ID_NASABAH' => $nasabah->ID_NASABAH]);

        $request = Request::create(route('updateCapacity', ['id' => $nasabah->ID_NASABAH]), 'POST', [
            'teh_utilisasi' => 15,
            'teh_lama_usaha' => 10,
            'cb_manajemen_sdm' => 9,
            'cb_pengelolaan' => 8,
            'cb_dscr' => 7,
        ]);

        Http::fake([
            'model:8000/capacity' => Http::response(['data' => ['percentage' => 85]], 200)
        ]);

        $response = $this->post(route('updateCapacity', ['id' => $nasabah->ID_NASABAH]), $request->all());

        $response->assertStatus(200);
    }
    public function testUpdateFailed()
    {
        $nasabah = TNasabah::factory()->create();
        $capacity = TCapacity::factory()->create(['ID_NASABAH' => $nasabah->ID_NASABAH]);
        $scoring = TScoring::factory()->create(['ID_NASABAH' => $nasabah->ID_NASABAH]);

        $request = Request::create(route('updateCapacity', ['id' => $nasabah->ID_NASABAH]), 'POST', [
            'teh_utilisasi' => 15,
            'teh_lama_usaha' => 10,
            'cb_manajemen_sdm' => 9,
            'cb_pengelolaan' => 8,
            'cb_dscr' => 7,
        ]);

        Http::fake([
            'model:8000/capacity' => Http::response(['data' => ['percentage' => 85]], 200)
        ]);

        $response = $this->post(route('updateCapacity', ['id' => $nasabah->ID_NASABAH]), $request->all());

        $response->assertStatus(200);
    }

}
