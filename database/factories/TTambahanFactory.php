<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\TTambahan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\TTambahan>
 */
final class TTambahanFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var string
    */
    protected $model = TTambahan::class;

    /**
    * Define the model's default state.
    *
    * @return array
    */
    public function definition(): array
    {
        return [
            'ID_NASABAH' => fake()->word,
            'TAMBAHAN' => fake()->optional()->word,
            'RESIKO' => fake()->optional()->word,
            'MITIGASI' => fake()->optional()->word,
        ];
    }
}
