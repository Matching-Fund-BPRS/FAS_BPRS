<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Pbcatfmt;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\Pbcatfmt>
 */
final class PbcatfmtFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var string
    */
    protected $model = Pbcatfmt::class;

    /**
    * Define the model's default state.
    *
    * @return array
    */
    public function definition(): array
    {
        return [
            'pbf_name' => fake()->optional()->word,
            'pbf_frmt' => fake()->optional()->word,
            'pbf_type' => fake()->optional()->randomNumber(),
            'pbf_cntr' => fake()->optional()->randomNumber(),
        ];
    }
}
