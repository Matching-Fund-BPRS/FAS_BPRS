<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\TPegawai;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\TPegawai>
 */
final class TPegawaiFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var string
    */
    protected $model = TPegawai::class;

    /**
    * Define the model's default state.
    *
    * @return array
    */
    public function definition(): array
    {
        return [
            'ID_NASABAH' => fake()->word,
            'NAMA_PERUSAHAAN' => fake()->optional()->word,
            'ALAMAT' => fake()->optional()->word,
            'JENIS_PEKERJAAN' => fake()->optional()->word,
            'STATUS_PEKERJAAN' => fake()->optional()->word,
            'BIDANG_USAHA' => fake()->optional()->word,
            'SKALA_USAHA' => fake()->optional()->word,
            'JABATAN' => fake()->optional()->word,
            'STATUS_PEGAWAI' => fake()->optional()->word,
            'LAMA_BEKERJA' => fake()->optional()->word,
            'NAMA_ATASAN' => fake()->optional()->word,
            'NO_TELP_ATASAN' => fake()->optional()->word,
            'NO_TELP_KANTOR' => fake()->optional()->word,
            'JABATAN_ATASAN' => fake()->optional()->word,
            'NAMA_BENDAHARA' => fake()->optional()->word,
            'NO_TELP_BENDAHARA' => fake()->optional()->word,
            'PENYALURAN_GAJI' => fake()->optional()->word,
        ];
    }
}
