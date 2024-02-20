<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\TAngsuran;
use App\Models\TNasabah;
use App\Models\TRekomendasi;
use App\Models\User;

class AngsuranControllerTest extends TestCase
{


    public function testIndexRedirectsWithoutLogin()
    {

        // Assume there's an existing TNasabah record in the database
        $nasabah = TNasabah::first();

        // Arrange
        $response = $this->get('/dashboard/daftarangsuran/' . $nasabah->ID_NASABAH);
        // Assert
        $response->assertStatus(302);
        $response->assertRedirect('/login');
    }

    public function testIndexViewWithoutData(){
        
    }

    public function testIndexViewWithData()
    {
        $user = User::first();

        $this->actingAs($user);

        // Assume there's an existing TNasabah record in the database
        $nasabah = TNasabah::first();

        // Assume there's an existing TRekomendasi record related to the TNasabah
        $rekomendasi = TRekomendasi::where('ID_NASABAH', $nasabah->ID_NASABAH)->first();

        // Arrange
        $response = $this->get('/dashboard/daftarangsuran/' . $nasabah->ID_NASABAH);

        // Assert
        $response->assertStatus(200);
        $response->assertViewIs('daftarangsuran');
        $response->assertViewHas('nasabah', $nasabah);
        $response->assertViewHas('plafond', $rekomendasi->LIMIT_KREDIT);
        $response->assertViewHas('margin', $rekomendasi->BUNGA);
        $response->assertViewHas('jangkaWaktu', $rekomendasi->JANGKA_WAKTU);
        $response->assertViewHas('data_angsuran', TAngsuran::where('ID_NASABAH', $nasabah->ID_NASABAH)->get());
    }
}
