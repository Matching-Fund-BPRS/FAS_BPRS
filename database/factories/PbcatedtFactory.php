<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Pbcatedt;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\Pbcatedt>
 */
final class PbcatedtFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var string
    */
    protected $model = Pbcatedt::class;

    /**
    * Define the model's default state.
    *
    * @return array
    */
    public function definition(): array
    {
        return [
            'pbe_name' => fake()->optional()->word,
            'pbe_edit' => fake()->optional()->word,
            'pbe_type' => fake()->optional()->randomNumber(),
            'pbe_cntr' => fake()->optional()->randomNumber(),
            'pbe_seqn' => fake()->optional()->randomNumber(),
            'pbe_flag' => fake()->optional()->randomNumber(),
            'pbe_work' => fake()->optional()->word,
        ];
    }
}
