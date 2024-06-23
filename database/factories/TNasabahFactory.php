<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\TNasabah;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\TNasabah>
 */
final class TNasabahFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var string
    */
    protected $model = TNasabah::class;

    /**
    * Define the model's default state.
    *
    * @return array
    */
    public function definition(): array
    {
        return [
            'ID_NASABAH' => fake()->randomNumber(),
            'ID_CABANG' => fake()->optional()->word,
            'NO_SURVEY' => 1,
            'CIF' => fake()->optional()->word,
            'TGL_PERMOHONAN' => fake()->optional()->date(),
            'TGL_ANALISA' => fake()->optional()->date(),
            'LIMIT_KREDIT' => fake()->optional()->randomNumber(),
            'BUNGA' => fake()->optional()->randomFloat(),
            'JANGKA_WAKTU' => fake()->optional()->randomNumber(),
            'SIFAT' => 1,
            'JENIS_PERMOHONAN' => 1,
            'TUJUAN' => 1,
            'KET_TUJUAN' => fake()->optional()->word,
            'BIDANG_USAHA' => fake()->optional()->word,
            'SUB_USAHA' => fake()->optional()->word,
            'TGL_MULAI_USAHA' => fake()->optional()->date(),
            'JUMLAH_KARY' => fake()->optional()->randomNumber(),
            'NAMA' => fake()->optional()->word,
            'NAMA_BADAN_USAHA' => fake()->optional()->word,
            'ALAMAT_USAHA' => fake()->optional()->word,
            'STATUS_PERKAWINAN' => 1,
            'TEMPAT_LAHIR' => fake()->optional()->word,
            'TGL_LAHIR' => fake()->optional()->date(),
            'GENDER' => 1,
            'NO_KTP' => fake()->optional()->word,
            'TGL_BERLAKU_KTP' => fake()->optional()->date(),
            'ALAMAT' => fake()->optional()->word,
            'NO_TELP' => fake()->optional()->word,
            'NO_KANTOR' => fake()->optional()->word,
            'STATUS_TEMPAT_TINGGAL' => 1,
            'LAMA_TINGGAL' => fake()->optional()->randomNumber(),
            'TINGKAT_PENDIDIKAN' => 1,
            'JUMLAH_TANGGUNGAN' => 2,
            'NAMA_PASANGAN' => fake()->optional()->word,
            'TEMPAT_LAHIR_PASANGAN' => fake()->optional()->word,
            'TGL_LAHIR_PASANGAN' => fake()->optional()->date(),
            'ALAMAT_PASANGAN' => fake()->optional()->word,
            'PROFESI_PASANGAN' => 2,
            'NO_TELP_PASANGAN' => fake()->optional()->word,
            'NAMA_EC' => fake()->optional()->word,
            'HUB_EC' => 1,
            'ALAMAT_EC' => fake()->optional()->word,
            'NO_TELP_EC' => fake()->optional()->word,
            'USER_ID' => fake()->optional()->word,
            'JADI_NASABAH_SEJAK' => fake()->optional()->date(),
            'STATUS_TEMPAT_USAHA' =>1,
            'NO_TELP_USAHA' => fake()->optional()->word,
            'MASA_KTP' => 1,
            'JENIS_DEB' => 1,
            'BENTUK_BADAN_USAHA' => fake()->optional()->word,
            'NO_PENDIRIAN' => fake()->optional()->word,
            'TGL_PENDIRIAN' => fake()->optional()->date(),
            'KONDISI_PENDIRIAN' => 1,
            'ANGGARAN' => fake()->optional()->word,
            'TGL_ANGGARAN' => fake()->optional()->date(),
            'KONDISI_ANGGARAN' => 1,
            'PENGURUS' => fake()->optional()->word,
            'TGL_PENGURUS' => fake()->optional()->date(),
            'KONDISI_PENGURUS' => 1,
            'ISI_PENDIRIAN' => fake()->optional()->word,
            'ISI_ANGGARAN' => fake()->optional()->word,
            'ISI_PENGURUS' => fake()->optional()->word,
            'BASIL_BANK' => fake()->randomNumber(),
            'BASIL_DEB' => fake()->randomNumber(),
        ];
    }
    
}
