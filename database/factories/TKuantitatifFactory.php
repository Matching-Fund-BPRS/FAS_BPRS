<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\TKuantitatif;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\TKuantitatif>
 */
final class TKuantitatifFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var string
    */
    protected $model = TKuantitatif::class;

    /**
    * Define the model's default state.
    *
    * @return array
    */
    public function definition(): array
    {
        return [
            'ID_NASABAH' => fake()->word,
            'KEPEMILIKAN' => fake()->optional()->randomNumber(),
            'NILAI_AGUNAN' => fake()->optional()->randomNumber(),
            'PENGIKATAN' => fake()->optional()->randomNumber(),
            'MARKETABILITY' => fake()->optional()->randomNumber(),
            'PENGUASAAN' => fake()->optional()->randomNumber(),
            'ASURANSI' => fake()->optional()->randomNumber(),
        ];
    }
}
