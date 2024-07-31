<?php

namespace Tests\Unit\Http\Controllers;

use Tests\TestCase;
use Illuminate\Http\Request;
use App\Models\TNasabah;
use App\Models\TCapital;
use App\Models\TScoring;
use Illuminate\Support\Facades\Http;
use Illuminate\Foundation\Testing\RefreshDatabase;

use Illuminate\Foundation\Testing\WithoutMiddleware;

class CapitalControllerTest extends TestCase
{
    use RefreshDatabase, WithoutMiddleware;

    public function testIndex()
    {
        $nasabah = TNasabah::factory()->create(['ID_NASABAH' => '123']);
        $capital = TCapital::factory()->create(['ID_NASABAH' => '123']);
        $scoring = TScoring::factory()->create(['ID_NASABAH' => '123', 'CAPITAL' => 50]);

        $response = $this->get(route('5capital', ['id' => '123']));

        $response->assertStatus(200);
        $response->assertViewIs('5capital');
        $response->assertViewHasAll(['capital_nasabah' => $capital, 'nasabah' => $nasabah, 'output' => 50]);
    }

    public function testpostCapital()
    {
        $nasabah = TNasabah::factory()->create(['ID_NASABAH' => '123']);
        $request = Request::create(route('postCapital'), 'POST', [
            'cm_dar' => 1.5,
            'cm_der' => 1.2,
            'cm_lder' => 0.8,
            'pk_asset' => '100.000',
            'pk_income_sales' => 2,
            'rpc' => 2.5,
            'pk_ebit' => 1200,
            'id' => '123'
        ]);

        Http::fake([
            'http://127.0.0.1:9000/capital' => Http::response(['data' => ['percentage' => 75]], 200)
        ]);

        $response = $this->post(route('postCapital'), $request->all());

        $response->assertStatus(200);
        $response->assertViewIs('5capital');
        $response->assertViewHas('output', 75);
        $response->assertViewHas('result_message', "Berhasil menambahkan data!");
    }

    public function testUpdate()
    {
        $nasabah = TNasabah::factory()->create(['ID_NASABAH' => '123']);
        $request = Request::create(route('updateCapital', ['id' => '123']), 'POST', [
            'cm_dar' => 1.8,
            'cm_der' => 1.3,
            'cm_lder' => 0.9,
            'pk_asset' => '200.000',
            'pk_income_sales' => 2,
            'rpc' => 3.0,
            'pk_ebit' => 1500
        ]);

        Http::fake([
            'http://127.0.0.1:9000/capital' => Http::response(['data' => ['percentage' => 80]], 200)
        ]);

        $response = $this->post(route('updateCapital', ['id' => '123']), $request->all());

        $response->assertStatus(200);
        $response->assertViewIs('5capital');
        $response->assertViewHas('output', 80);
        $response->assertViewHas('result_message', "Berhasil memperbarui data!");
    }
    public function testpostCapitalFailed()
    {
        $nasabah = TNasabah::factory()->create(['ID_NASABAH' => '123']);
        $request = Request::create(route('postCapital'), 'POST', [
            'cm_dar' => 1.5,
            'cm_der' => 1.2,
            'cm_lder' => 0.8,
            'pk_asset' => '100.000',
            'pk_income_sales' => 2,
            'rpc' => 2.5,
            'pk_ebit' => 1200,
            'id' => '123'
        ]);

        Http::fake([
            'http://127.0.0.1:9000/capital' => Http::response(['data' => ['percentage' => 75]], 200)
        ]);

        $response = $this->post(route('postCapital'), $request->all());

        $response->assertStatus(200);
        $response->assertViewIs('5capital');
        $response->assertViewHas('output', 75);
        $response->assertViewHas('result_message', "Berhasil menambahkan data!");
    }

    public function testUpdateFailed()
    {
        $nasabah = TNasabah::factory()->create(['ID_NASABAH' => '123']);
        $request = Request::create(route('updateCapital', ['id' => '123']), 'POST', [
            'cm_dar' => 1.8,
            'cm_der' => 1.3,
            'cm_lder' => 0.9,
            'pk_asset' => '200.000',
            'pk_income_sales' => 2,
            'rpc' => 3.0,
            'pk_ebit' => 1500
        ]);

        Http::fake([
            'http://127.0.0.1:9000/capital' => Http::response(['data' => ['percentage' => 80]], 200)
        ]);

        $response = $this->post(route('updateCapital', ['id' => '123']), $request->all());

        $response->assertStatus(200);
        $response->assertViewIs('5capital');
        $response->assertViewHas('output', 80);
        $response->assertViewHas('result_message', "Berhasil memperbarui data!");
    }
}

