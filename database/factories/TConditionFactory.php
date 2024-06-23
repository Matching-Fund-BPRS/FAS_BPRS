<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\TCondition;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\TCondition>
 */
final class TConditionFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var string
    */
    protected $model = TCondition::class;

    /**
    * Define the model's default state.
    *
    * @return array
    */
    public function definition(): array
    {
        return [
            'PEM_KETERGANTUNGAN' => fake()->optional()->randomNumber(),
            'PEM_KEBUTUHAN' => fake()->optional()->randomNumber(),
            'CU_PASOKAN' => fake()->optional()->randomNumber(),
            'CU_KONSUMEN' => fake()->optional()->randomNumber(),
            'CU_KECAKAPAN' => fake()->optional()->randomNumber(),
            'CU_EKSTERNAL' => fake()->optional()->randomNumber(),
            'ID_NASABAH' => fake()->word,
        ];
    }
}
