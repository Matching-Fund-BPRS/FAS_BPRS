<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Pbcatvld;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\Pbcatvld>
 */
final class PbcatvldFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var string
    */
    protected $model = Pbcatvld::class;

    /**
    * Define the model's default state.
    *
    * @return array
    */
    public function definition(): array
    {
        return [
            'pbv_name' => fake()->optional()->word,
            'pbv_vald' => fake()->optional()->word,
            'pbv_type' => fake()->optional()->randomNumber(),
            'pbv_cntr' => fake()->optional()->randomNumber(),
            'pbv_msg' => fake()->optional()->word,
        ];
    }
}
