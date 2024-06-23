<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\TCashflowKontraktor;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\TCashflowKontraktor>
 */
final class TCashflowKontraktorFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var string
    */
    protected $model = TCashflowKontraktor::class;

    /**
    * Define the model's default state.
    *
    * @return array
    */
    public function definition(): array
    {
        return [
            'ID_NASABAH' => fake()->word,
            'TERMIN_1' => fake()->optional()->word,
            'TERMIN_2' => fake()->optional()->word,
            'TERMIN_3' => fake()->optional()->word,
            'DANA_SENDIRI' => fake()->optional()->word,
            'UANG_MUKA' => fake()->optional()->word,
            'PENCAIRAN' => fake()->optional()->word,
            'PINJAMAN' => fake()->optional()->word,
            'HUTANG_USAHA' => fake()->optional()->word,
            'PEMELIHARAAN' => fake()->optional()->word,
            'TOTAL_BIAYA_PROYEK' => fake()->optional()->word,
            'PAJAK' => fake()->optional()->word,
            'BIAYA_LAIN' => fake()->optional()->word,
            'BUNGA_PINJ_BANK' => fake()->optional()->word,
            'ANGS_POKOK_BANK' => fake()->optional()->word,
            'NILAI_PROYEK' => fake()->optional()->word,
        ];
    }
}
