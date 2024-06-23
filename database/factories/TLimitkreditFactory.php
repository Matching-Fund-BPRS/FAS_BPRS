<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\TLimitkredit;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\TLimitkredit>
 */
final class TLimitkreditFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var string
    */
    protected $model = TLimitkredit::class;

    /**
    * Define the model's default state.
    *
    * @return array
    */
    public function definition(): array
    {
        return [
            'ID_NASABAH' => fake()->word,
            'LIMIT_KREDIT' => fake()->optional()->randomNumber(1),
            'JANGKA_WAKTU' => fake()->optional()->randomNumber(1),
            'OMSET' => fake()->optional()->randomNumber(1),
            'HPP' => fake()->optional()->randomNumber(1),
            'BIAYA_HIDUP' => fake()->optional()->randomNumber(1),
            'ANGS_BANK_LAIN' => fake()->optional()->randomNumber(1),
            'BUNGA_KREDIT' => fake()->optional()->randomNumber(1),
            'ANGSURAN' => fake()->optional()->randomNumber(1),
            'PEND_LAIN' => fake()->optional()->randomNumber(1),
            'RPC' => fake()->optional()->randomNumber(1),
            'JENIS' => fake()->optional()->randomNumber(1),
            'BIAYA_LAIN' => fake()->optional()->randomNumber(1),
        ];
    }
}
