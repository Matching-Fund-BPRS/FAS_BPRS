<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\TResiko;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\TResiko>
 */
final class TResikoFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var string
    */
    protected $model = TResiko::class;

    /**
    * Define the model's default state.
    *
    * @return array
    */
    public function definition(): array
    {
        return [
            'ID_NASABAH' => fake()->word,
            'RESIKO' => fake()->optional()->word,
            'MITIGASI_RESIKO' => fake()->optional()->word,
            'BADAN_USAHA' => fake()->text,
            'USULAN' => fake()->text,
        ];
    }
}
