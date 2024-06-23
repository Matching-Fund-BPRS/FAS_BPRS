<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\ReffBank;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\ReffBank>
 */
final class ReffBankFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var string
    */
    protected $model = ReffBank::class;

    /**
    * Define the model's default state.
    *
    * @return array
    */
    public function definition(): array
    {
        return [
            'KODE' => fake()->randomNumber(1),
            'BANK' => fake()->randomNumber(1),
            'DELETED' => fake()->randomNumber(1),
        ];
    }
}
