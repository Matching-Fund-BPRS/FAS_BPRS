<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\TCapacity;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\TCapacity>
 */
final class TCapacityFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var string
    */
    protected $model = TCapacity::class;

    /**
    * Define the model's default state.
    *
    * @return array
    */
    public function definition(): array
    {
        return [
            'TEH_UTILISASI' => fake()->optional()->randomNumber(),
            'TEH_LAMA_USAHA' => fake()->optional()->randomNumber(),
            'CB_MANAJEMEN_SDM' => fake()->optional()->randomNumber(),
            'CB_PENGELOLAAN' => fake()->optional()->randomNumber(),
            'CB_DSCR' => fake()->optional()->randomFloat(2, 0, 999999999999999999),
            'ID_NASABAH' => fake()->word,
        ];
    }
}
