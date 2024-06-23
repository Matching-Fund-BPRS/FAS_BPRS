<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\TScoring;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\TScoring>
 */
final class TScoringFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var string
    */
    protected $model = TScoring::class;

    /**
    * Define the model's default state.
    *
    * @return array
    */
    public function definition(): array
    {
        return [
            'CHARACTER' => fake()->optional()->randomFloat(2, 0, 9999999),
            'CAPACITY' => fake()->optional()->randomFloat(2, 0, 9999999),
            'COLLATERAL' => fake()->optional()->randomFloat(2, 0, 9999999),
            'CONDITION' => fake()->optional()->randomFloat(2, 0, 9999999),
            'CAPITAL' => fake()->optional()->randomFloat(2, 0, 9999999),
            'SYARIAH' => fake()->optional()->randomFloat(2, 0, 9999999),
            'SCORING' => fake()->optional()->randomFloat(2, 0, 9999999),
            'ID_NASABAH' => fake()->word,
        ];
    }
}
