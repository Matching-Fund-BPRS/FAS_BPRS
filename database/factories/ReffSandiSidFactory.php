<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\ReffSandiSid;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\ReffSandiSid>
 */
final class ReffSandiSidFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var string
    */
    protected $model = ReffSandiSid::class;

    /**
    * Define the model's default state.
    *
    * @return array
    */
    public function definition(): array
    {
        return [
            'JENIS' => fake()->randomNumber(1),
            'SANDI' => fake()->randomNumber(1),
            'KETERANGAN' => fake()->randomNumber(1),
            'DELETED' => fake()->randomNumber(1),
        ];
    }
}
