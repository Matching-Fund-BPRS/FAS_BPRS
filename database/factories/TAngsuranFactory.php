<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\TAngsuran;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\TAngsuran>
 */
final class TAngsuranFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var string
    */
    protected $model = TAngsuran::class;

    /**
    * Define the model's default state.
    *
    * @return array
    */
    public function definition(): array
    {
        return [
            'ID_NASABAH' => fake()->optional()->randomNumber(),
            'NO_ANGSURAN' => fake()->optional()->randomNumber(1),
            'POKOK_PINJAMAN' => fake()->optional()->randomNumber(),
            'ANGS_POKOK' => fake()->optional()->randomNumber(),
            'ANGS_BUNGA' => fake()->optional()->randomNumber(),
        ];
    }
}
