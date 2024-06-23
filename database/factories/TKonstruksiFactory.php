<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\TKonstruksi;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\TKonstruksi>
 */
final class TKonstruksiFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var string
    */
    protected $model = TKonstruksi::class;

    /**
    * Define the model's default state.
    *
    * @return array
    */
    public function definition(): array
    {
        return [
            'ID_NASABAH' => fake()->optional()->word,
            'NILAI_KONTRAK' => fake()->optional()->word,
            'PPN' => fake()->optional()->word,
            'PPH' => fake()->optional()->word,
            'NILAI_PROYEK_NET' => fake()->optional()->word,
            'MAX_PLAFOND' => fake()->optional()->word,
            'ESTIMASI_HPP' => fake()->optional()->word,
            'ANGSURAN_BANK' => fake()->optional()->word,
            'ESTIMASI_BUNGA' => fake()->optional()->word,
        ];
    }
}
