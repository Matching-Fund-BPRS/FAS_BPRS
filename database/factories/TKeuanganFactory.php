<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\TKeuangan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\TKeuangan>
 */
final class TKeuanganFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var string
    */
    protected $model = TKeuangan::class;

    /**
    * Define the model's default state.
    *
    * @return array
    */
    public function definition(): array
    {
        return [
            'ID_NASABAH' => fake()->word,
            'OMZET' => fake()->optional()->word,
            'BIAYA_GAJI' => fake()->optional()->word,
            'BIAYA_BB' => fake()->optional()->word,
            'BIAYA_STOK' => fake()->optional()->word,
            'BIAYA_PRODUKSI' => fake()->optional()->word,
            'BIAYA_TRANSPORT' => fake()->optional()->word,
            'BIAYA_USAHA_LAIN' => fake()->optional()->word,
            'BIAYA_RT_LISTRIK' => fake()->optional()->word,
            'BIAYA_RT_TRANSPORT' => fake()->optional()->word,
            'BIAYA_RT_SEKOLAH' => fake()->optional()->word,
            'BIAYA_RT_MAKAN' => fake()->optional()->word,
            'BIAYA_RT_PEMELIHARAAN' => fake()->optional()->word,
            'BIAYA_PENUNJANG_USAHA' => fake()->optional()->word,
            'BIAYA_RT_LAIN' => fake()->optional()->word,
            'ANGS_BANK_UMUM' => fake()->optional()->word,
            'ANGS_BPR' => fake()->optional()->word,
            'ANGS_LEASING' => fake()->optional()->word,
            'ANGS_KOPERASI' => fake()->optional()->word,
            'ANGS_LAIN' => fake()->optional()->word,
            'PENDAPATAN_LAIN' => fake()->optional()->word,
            'BIAYA_LAIN' => fake()->optional()->word,
        ];
    }
}
