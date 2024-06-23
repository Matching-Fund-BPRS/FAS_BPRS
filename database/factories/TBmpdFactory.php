<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\TBmpd;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\TBmpd>
 */
final class TBmpdFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var string
    */
    protected $model = TBmpd::class;

    /**
    * Define the model's default state.
    *
    * @return array
    */
    public function definition(): array
    {
        return [
            'ID_NASABAH' => fake()->word,
            'MODAL_INTI_CAB' => fake()->optional()->randomNumber(1),
            'MODAL_INTI_PUSAT' => fake()->optional()->randomNumber(1),
            'MODAL_PELENGKAP_CAB' => fake()->optional()->randomNumber(1),
            'MODAL_PELENGKAP_PUSAT' => fake()->optional()->randomNumber(1),
            'BMPD_PERORG_CAB' => fake()->optional()->randomNumber(1),
            'BMPD_PERORG_PUSAT' => fake()->optional()->randomNumber(1),
            'BMPD_KEL_CAB' => fake()->optional()->randomNumber(1),
            'BMPD_KEL_PUSAT' => fake()->optional()->randomNumber(1),
            'BMPD_TERKAIT_CAB' => fake()->optional()->randomNumber(1),
            'BMPD_TERKAIT_PUSAT' => fake()->optional()->randomNumber(1),
            'PLAFOND_CAB' => fake()->optional()->randomNumber(1),
            'PLAFOND_PUSAT' => fake()->optional()->randomNumber(1),
        ];
    }
}
