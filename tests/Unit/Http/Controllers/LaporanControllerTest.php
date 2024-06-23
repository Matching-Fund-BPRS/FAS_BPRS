<?php

namespace Tests\Unit\Http\Controllers;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\Request;
use App\Models\TNasabah;
use App\Models\TFa;
use App\Models\TBmpd;
use App\Models\TCharacter;
use App\Models\TCapacity;
use App\Models\TCondition;
use App\Models\TCapital;
use App\Models\TCollateral;
use App\Models\TSyariah;
use App\Models\TAgunan;
use App\Models\TScoring;
use App\Models\TKeuangan;
use App\Models\TRugilaba;
use App\Models\TNeraca;
use App\Models\TAngsuran;
use App\Models\TRekomendasi;
use App\Models\TBisid;
use App\Models\TResiko;
use Carbon\Carbon;

class LaporanControllerTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    public function testDownloadLaporan()
    {
        $nasabah = TNasabah::factory()->create();
        $request = Request::create(route('downloadLaporan'), 'POST', [
            'ID_NASABAH' => $nasabah->ID_NASABAH
        ]);

        $response = $this->post(route('downloadLaporan'), $request->all());

        $response->assertStatus(302);
    }
}
