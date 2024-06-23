<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\TCatatan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\TCatatan>
 */
final class TCatatanFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var string
    */
    protected $model = TCatatan::class;

    /**
    * Define the model's default state.
    *
    * @return array
    */
    public function definition(): array
    {
        return [
            'ID_NASABAH' => fake()->word,
            'CATATAN' => fake()->optional()->word,
        ];
    }
}
