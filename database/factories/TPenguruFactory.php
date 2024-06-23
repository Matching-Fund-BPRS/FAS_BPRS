<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\TPenguru;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\TPenguru>
 */
final class TPenguruFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var string
    */
    protected $model = TPenguru::class;

    /**
    * Define the model's default state.
    *
    * @return array
    */
    public function definition(): array
    {
        return [
            'ID_NASABAH' => fake()->randomNumber(6),
            'NAMA' => fake()->optional()->word,
            'JABATAN' => fake()->optional()->word,
            'NO_TELP' => fake()->optional()->word,
            'TGL_LAHIR' => fake()->optional()->date(),
            'NO_KTP' => fake()->optional()->word,
            'SAHAM' => fake()->optional()->randomNumber(),
        ];
    }
}
