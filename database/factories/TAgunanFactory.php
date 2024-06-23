<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\TAgunan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\TAgunan>
 */
final class TAgunanFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var string
    */
    protected $model = TAgunan::class;

    /**
    * Define the model's default state.
    *
    * @return array
    */
    public function definition(): array
    {
        return [
            'ID_NASABAH' => fake()->optional()->word,
            'JENIS' => fake()->optional()->randomNumber(1),
            'BUKTI_MILIK' => fake()->optional()->randomNumber(1),
            'MERK' => fake()->optional()->word,
            'TAHUN' => fake()->optional()->randomNumber(1),
            'NO_BPKB' => fake()->optional()->word,
            'NOPOL' => fake()->optional()->word,
            'NO_MESIN' => fake()->optional()->word,
            'NO_RANGKA' => fake()->optional()->word,
            'WARNA' => fake()->optional()->word,
            'ATAS_NAMA' => fake()->optional()->word,
            'ALAMAT' => fake()->optional()->word,
            'TGL_BERLAKU' => fake()->optional()->date(),
            'NO_AGUNAN' => fake()->optional()->word,
            'NAMA_PEMILIK' => fake()->optional()->word,
            'LOKASI' => fake()->optional()->word,
            'NILAI' => fake()->optional()->randomNumber(1),
            'JENIS_PENGIKATAN' => fake()->optional()->randomNumber(1),
            'ASURANSI' => fake()->optional()->randomNumber(1),
            'KET' => fake()->optional()->word,
            'LUAS_TANAH' => fake()->optional()->randomNumber(1),
            'LUAS_BANGUNAN' => fake()->optional()->randomNumber(1),
            'NO_DEP' => fake()->optional()->word,
            'DEP_BANK' => fake()->optional()->word,
            'SAVE_MARGIN' => fake()->optional()->randomNumber(1),
            'JENIS_BANGUNAN' =>fake()->optional()->randomNumber(1),
        ];
    }
}
