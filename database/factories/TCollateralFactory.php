<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\TCollateral;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\TCollateral>
 */
final class TCollateralFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var string
    */
    protected $model = TCollateral::class;

    /**
    * Define the model's default state.
    *
    * @return array
    */
    public function definition(): array
    {
        return [
            'LEG_USAHA' => fake()->optional()->randomNumber(),
            'PENGIKATAN' => fake()->optional()->randomNumber(),
            'MARKETABILITY' => fake()->optional()->randomNumber(),
            'KEPEMILIKAN' => fake()->optional()->randomNumber(),
            'PENGUASAAN' => fake()->optional()->randomNumber(),
            'CA_NILAI_AGUNAN' => fake()->optional()->randomNumber(),
            'PA_DOKUMEN' => fake()->optional()->randomNumber(),
            'ID_NASABAH' => fake()->word,
        ];
    }
}
