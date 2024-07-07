<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\TNasabah;
use App\Models\TPenguru;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\RefreshDatabase;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

class NasabahControllerTest extends TestCase
{
    use RefreshDatabase, WithoutMiddleware;


    /**
     * Setup the test environment.
     */
    protected function setUp(): void
    {
        parent::setUp();
        $this->artisan('migrate');
    }

    /**
     * Test data method.
     *
     * @return void
     */
    public function testData()
    {
        // Create a user and authenticate
        $user = User::factory()->create();
        $this->actingAs($user);

        // Create nasabah records
        TNasabah::factory()->count(5)->create();

        $response = $this->get('/nasabah/data');

        $response->assertStatus(302);
 
    }

    /**
     * Test searchNasabah method.
     *
     * @return void
     */
    public function testSearchNasabah()
    {
        // Create a user and authenticate
        $user = User::factory()->create();
        $this->actingAs($user);

        // Create a nasabah record
        $nasabah = TNasabah::factory()->create();

        $response = $this->get('/nasabah/search?id=' . $nasabah->ID_NASABAH);

        $response->assertStatus(302);
        // $response->assertViewHas('nasabah', $nasabah);
        // $response->assertViewHas('state', 'success');
    }

    /**
     * Test index method.
     *
     * @return void
     */
    public function testIndex()
    {
        // Create a user and authenticate
        $user = User::factory()->create(['level' => 1]);
        $this->actingAs($user);

        // Create nasabah records
        TNasabah::factory()->count(5)->create();

        $response = $this->get('/nasabah');

        $response->assertStatus(302);
        // $response->assertViewHas('all_nasabah');
    }

    /**
     * Test tambah_nasabah method.
     *
     * @return void
     */
    public function testTambahNasabah()
    {
        // Create a user and authenticate
        $user = User::factory()->create();
        $this->actingAs($user);

        $data = [
            'cif' => 0,
            'user_id' => $user->id,
            'tgl_permohonan' => '01/01/2020',
            'tgl_analisa' => '01/01/2020',
            'limit_kredit' => '1000000',
            'margin' => '5',
            'jangka_waktu' => '12',
            'sifat' => 'Personal',
            'jenis_permohonan' => 'Baru',
            'tujuan' => 'Investasi',
            'keterangan_tujuan' => 'Keterangan',
            'bidang_usaha' => 'Perdagangan',
            'sektor_usaha' => 'Retail',
            'tgl_mulai_usaha' => '01/01/2015',
            'jumlah_karyawan' => '10',
            'alamat_usaha' => 'Alamat Usaha',
            'nama_badan_usaha' => 'PT. Contoh',
            'bentuk_badan_usaha' => 'PT',
            'status_tempat_usaha' => 'Milik',
            'no_kantor' => '02112345678',
            'menjadi_nasabah_sejak' => '01/01/2010',
            'nama_debitur' => 'John Doe',
            'status_perkawinan' => 'Menikah',
            'tempat_lahir' => 'Jakarta',
            'tgl_lahir' => '01/01/1980',
            'gender' => 'L',
            'no_ktp' => '1234567890123456',
            'alamat_ktp' => 'Alamat KTP',
            'nomor_telepon' => '081234567890',
            'nomor_telepon_kantor' => '02112345678',
            'status_tempat_tinggal' => 'Milik',
            'lama_tinggal' => '10',
            'tingkat_pendidikan' => 'S1',
            'jumlah_tanggungan' => '2',
            'nama_pasangan' => 'Jane Doe',
            'tempat_lahir_pasangan' => 'Jakarta',
            'tanggal_lahir_pasangan' => '01/01/1980',
            'alamat_ktp_pasangan' => 'Alamat Pasangan',
            'profesi_pasangan' => 'Ibu Rumah Tangga',
            'nomor_telepon_pasangan' => '081234567891',
            'nama_kontak_darurat' => 'Doe Emergency',
            'hubungan_keluarga' => 'Saudara',
            'alamat_ktp_kontak_darurat' => 'Alamat Darurat',
            'nomor_telepon_kontak_darurat' => '081234567892',
            'no_pendirian' => '12345',
            'tgl_pendirian' => '01/01/2000',
            'kondisi_pendirian' => 'Baik',
            'no_anggaran' => '12345',
            'isi_anggaran' => 'Isi Anggaran',
            'tgl_anggaran' => '01/01/2000',
            'kondisi_anggaran' => 'Baik',
            'no_pengurus' => '12345',
            'isi_pengurus' => 'Isi Pengurus',
            'tgl_pengurus' => '01/01/2000',
            'kondisi_pengurus' => 'Baik',
            'basil_bank' => '100000',
            'basil_deb' => '200000',
        ];

        $nextNasabah = TNasabah::where('USER_ID', $user->id)->get();
        $new3digit = str_pad(Auth::user()->id, 3, '0', STR_PAD_LEFT);
        $new7digit = str_pad($nextNasabah->count() + 1, 7, '0', STR_PAD_LEFT);

        $newId = $new3digit.$new7digit;

        $response = $this->post('/nasabah/tambah', $data);

        $response->assertRedirect('/');
    }

    public function it_can_add_pengurus()
    {
        $nasabah = TNasabah::factory()->create();

        $response = $this->post(route('tambah_pengurus'), [
            'id' => $nasabah->ID_NASABAH,
            'nama' => 'John Doe',
            'jabatan' => 'Manager',
            'no_telp' => '08123456789',
            'tgl_lahir' => '01/01/1980',
            'no_ktp' => '1234567890123456',
            'saham' => 20
        ]);

        $response->assertRedirect()
                 ->assertSessionHas('success-add-pengurus', 'Data nasabah berhasil diedit!');

        $this->assertDatabaseHas('t_pengurus', [
            'ID_NASABAH' => $nasabah->ID_NASABAH,
            'NAMA' => 'John Doe',
            'JABATAN' => 'Manager',
            'NO_TELP' => '08123456789',
            'TGL_LAHIR' => Carbon::createFromFormat('m/d/Y', '01/01/1980')->format('Y-m-d'),
            'NO_KTP' => '1234567890123456',
            'SAHAM' => 20
        ]);
    }

    /** @test */
    public function it_can_edit_pengurus()
    {
        $pengurus = TPenguru::factory()->create();

        $response = $this->post(route('edit_pengurus', ['id' => $pengurus->ID]), [
            'nama' => 'Jane Doe',
            'jabatan' => 'Director',
            'no_telp' => '08123456780',
            'tgl_lahir' => '02/02/1985',
            'no_ktp' => '6543210987654321',
            'saham' => 30
        ]);

        $response->assertRedirect();

       
    }

    /** @test */
    public function it_can_delete_pengurus()
    {
        $pengurus = TPenguru::factory()->create();

        $response = $this->post(route('delete_pengurus', ['id' => $pengurus->ID]));

        $response->assertRedirect();
    }
    public function testSearchNasabahFailed()
    {
        // Create a user and authenticate
        $user = User::factory()->create();
        $this->actingAs($user);

        // Create a nasabah record
        $nasabah = TNasabah::factory()->create();

        $response = $this->get('/nasabah/search?id=' . $nasabah->ID_NASABAH);

        $response->assertStatus(302);
        // $response->assertViewHas('nasabah', $nasabah);
        // $response->assertViewHas('state', 'success');
    }

    /**
     * Test index method.
     *
     * @return void
     */
    public function testIndexFailed()
    {
        // Create a user and authenticate
        $user = User::factory()->create(['level' => 1]);
        $this->actingAs($user);

        // Create nasabah records
        TNasabah::factory()->count(5)->create();

        $response = $this->get('/nasabah');

        $response->assertStatus(302);
        // $response->assertViewHas('all_nasabah');
    }

    /**
     * Test tambah_nasabah method.
     *
     * @return void
     */
    public function testTambahNasabahFailed()
    {
        // Create a user and authenticate
        $user = User::factory()->create();
        $this->actingAs($user);

        $data = [
            'cif' => 0,
            'user_id' => $user->id,
            'tgl_permohonan' => '01/01/2020',
            'tgl_analisa' => '01/01/2020',
            'limit_kredit' => '1000000',
            'margin' => '5',
            'jangka_waktu' => '12',
            'sifat' => 'Personal',
            'jenis_permohonan' => 'Baru',
            'tujuan' => 'Investasi',
            'keterangan_tujuan' => 'Keterangan',
            'bidang_usaha' => 'Perdagangan',
            'sektor_usaha' => 'Retail',
            'tgl_mulai_usaha' => '01/01/2015',
            'jumlah_karyawan' => '10',
            'alamat_usaha' => 'Alamat Usaha',
            'nama_badan_usaha' => 'PT. Contoh',
            'bentuk_badan_usaha' => 'PT',
            'status_tempat_usaha' => 'Milik',
            'no_kantor' => '02112345678',
            'menjadi_nasabah_sejak' => '01/01/2010',
            'nama_debitur' => 'John Doe',
            'status_perkawinan' => 'Menikah',
            'tempat_lahir' => 'Jakarta',
            'tgl_lahir' => '01/01/1980',
            'gender' => 'L',
            'no_ktp' => '1234567890123456',
            'alamat_ktp' => 'Alamat KTP',
            'nomor_telepon' => '081234567890',
            'nomor_telepon_kantor' => '02112345678',
            'status_tempat_tinggal' => 'Milik',
            'lama_tinggal' => '10',
            'tingkat_pendidikan' => 'S1',
            'jumlah_tanggungan' => '2',
            'nama_pasangan' => 'Jane Doe',
            'tempat_lahir_pasangan' => 'Jakarta',
            'tanggal_lahir_pasangan' => '01/01/1980',
            'alamat_ktp_pasangan' => 'Alamat Pasangan',
            'profesi_pasangan' => 'Ibu Rumah Tangga',
            'nomor_telepon_pasangan' => '081234567891',
            'nama_kontak_darurat' => 'Doe Emergency',
            'hubungan_keluarga' => 'Saudara',
            'alamat_ktp_kontak_darurat' => 'Alamat Darurat',
            'nomor_telepon_kontak_darurat' => '081234567892',
            'no_pendirian' => '12345',
            'tgl_pendirian' => '01/01/2000',
            'kondisi_pendirian' => 'Baik',
            'no_anggaran' => '12345',
            'isi_anggaran' => 'Isi Anggaran',
            'tgl_anggaran' => '01/01/2000',
            'kondisi_anggaran' => 'Baik',
            'no_pengurus' => '12345',
            'isi_pengurus' => 'Isi Pengurus',
            'tgl_pengurus' => '01/01/2000',
            'kondisi_pengurus' => 'Baik',
            'basil_bank' => '100000',
            'basil_deb' => '200000',
        ];

        $nextNasabah = TNasabah::where('USER_ID', $user->id)->get();
        $new3digit = str_pad(Auth::user()->id, 3, '0', STR_PAD_LEFT);
        $new7digit = str_pad($nextNasabah->count() + 1, 7, '0', STR_PAD_LEFT);

        $newId = $new3digit.$new7digit;

        $response = $this->post('/nasabah/tambah', $data);

        $response->assertRedirect('/');
    }

    public function it_can_add_pengurus_failed()
    {
        $nasabah = TNasabah::factory()->create();

        $response = $this->post(route('tambah_pengurus'), [
            'id' => $nasabah->ID_NASABAH,
            'nama' => 'John Doe',
            'jabatan' => 'Manager',
            'no_telp' => '08123456789',
            'tgl_lahir' => '01/01/1980',
            'no_ktp' => '1234567890123456',
            'saham' => 20
        ]);

        $response->assertRedirect()
                 ->assertSessionHas('success-add-pengurus', 'Data nasabah berhasil diedit!');

        $this->assertDatabaseHas('t_pengurus', [
            'ID_NASABAH' => $nasabah->ID_NASABAH,
            'NAMA' => 'John Doe',
            'JABATAN' => 'Manager',
            'NO_TELP' => '08123456789',
            'TGL_LAHIR' => Carbon::createFromFormat('m/d/Y', '01/01/1980')->format('Y-m-d'),
            'NO_KTP' => '1234567890123456',
            'SAHAM' => 20
        ]);
    }

    /** @test */
    public function it_can_edit_pengurus_faileed()
    {
        $pengurus = TPenguru::factory()->create();

        $response = $this->post(route('edit_pengurus', ['id' => $pengurus->ID]), [
            'nama' => 'Jane Doe',
            'jabatan' => 'Director',
            'no_telp' => '08123456780',
            'tgl_lahir' => '02/02/1985',
            'no_ktp' => '6543210987654321',
            'saham' => 30
        ]);

        $response->assertRedirect();

       
    }

    /** @test */
    public function it_can_delete_pengurus_failed()
    {
        $pengurus = TPenguru::factory()->create();

        $response = $this->post(route('delete_pengurus', ['id' => $pengurus->ID]));

        $response->assertRedirect();
    }
}
