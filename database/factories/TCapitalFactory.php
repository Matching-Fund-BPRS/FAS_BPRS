<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\TCapital;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\TCapital>
 */
final class TCapitalFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var string
    */
    protected $model = TCapital::class;

    /**
    * Define the model's default state.
    *
    * @return array
    */
    public function definition(): array
    {
        return [
            'ID_NASABAH' => fake()->word,
            'CM_DAR' => fake()->optional()->randomFloat(2, 0, 999999999999999999),
            'CM_DER' => fake()->optional()->randomFloat(2, 0, 999999999999999999),
            'CM_LDER' => fake()->optional()->randomFloat(2, 0, 999999999999999999),
            'PK_ASET' => fake()->optional()->randomFloat(1, 0, 1.0E+19),
            'PK_INCOME_SALES' => fake()->optional()->randomFloat(1, 0, 99),
            'RPC' => fake()->optional()->randomFloat(2, 0, 999999999999999999),
            'PK_EBIT' => fake()->optional()->randomFloat(1, 0, 1.0E+19),
        ];
    }
}
