<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\ReffSubUsaha;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\ReffSubUsaha>
 */
final class ReffSubUsahaFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var string
    */
    protected $model = ReffSubUsaha::class;

    /**
    * Define the model's default state.
    *
    * @return array
    */
    public function definition(): array
    {
        return [
            'ID' => fake()->randomNumber(1),
            'USAHA' => fake()->randomNumber(1),
            'SEKTOR' => fake()->randomNumber(1),
        ];
    }
}
