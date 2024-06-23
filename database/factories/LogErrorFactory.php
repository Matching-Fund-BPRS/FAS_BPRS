<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\LogError;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\LogError>
 */
final class LogErrorFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var string
    */
    protected $model = LogError::class;

    /**
    * Define the model's default state.
    *
    * @return array
    */
    public function definition(): array
    {
        return [
            'ID' => fake()->randomNumber(),
            'TANGGAL' => fake()->optional()->dateTime(),
            'USER_ID' => fake()->optional()->word,
            'KETERANGAN' => fake()->optional()->word,
        ];
    }
}
