<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\TCharacter;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\TCharacter>
 */
final class TCharacterFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var string
    */
    protected $model = TCharacter::class;

    /**
    * Define the model's default state.
    *
    * @return array
    */
    public function definition(): array
    {
        return [
            'MAN_KEMAUAN' => fake()->optional()->randomNumber(),
            'MAN_KEJUJURAN' => fake()->optional()->randomNumber(),
            'MAN_REPUTASI' => fake()->optional()->randomNumber(),
            'CW_TANGGUNG' => fake()->optional()->randomNumber(),
            'CW_TERBUKA' => fake()->optional()->randomNumber(),
            'CW_DISIPLIN' => fake()->optional()->randomNumber(),
            'CW_JANJI' => fake()->optional()->randomNumber(),
            'PU_INTEGRITAS' => fake()->optional()->randomNumber(),
            'PU_ACCOUNT_BEHAVIOR' => fake()->optional()->randomNumber(),
            'ID_NASABAH' => fake()->word,
        ];
    }
}
