<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\TRugilaba;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\TRugilaba>
 */
final class TRugilabaFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var string
    */
    protected $model = TRugilaba::class;

    /**
    * Define the model's default state.
    *
    * @return array
    */
    public function definition(): array
    {
        return [
            'ID_NASABAH' => fake()->word,
            'PERIODE' => fake()->optional()->randomNumber(1),
            'TGL_PERIODE' => fake()->optional()->date(),
            'PENJUALAN_BERSIH' => fake()->optional()->randomNumber(1),
            'HPP' => fake()->optional()->randomNumber(1),
            'BIAYA_PEGAWAI' => fake()->optional()->randomNumber(1),
            'BIAYA_TRANSPORT' => fake()->optional()->randomNumber(1),
            'BIAYA_LISTRIK' => fake()->optional()->randomNumber(1),
            'BIAYA_TELPON' => fake()->optional()->randomNumber(1),
            'BIAYA_PAM' => fake()->optional()->randomNumber(1),
            'BIAYA_LAIN' => fake()->optional()->randomNumber(1),
            'BIAYA_HIDUP' => fake()->optional()->randomNumber(1),
            'PENYUSUTAN' => fake()->optional()->randomNumber(1),
            'PENDAPATAN_LAIN' => fake()->optional()->randomNumber(1),
            'BIAYA_BUNGA' => fake()->optional()->randomNumber(1),
            'BIAYA_PAJAK' => fake()->optional()->randomNumber(1),
            'SET_ASSET' => fake()->optional()->randomNumber(1),
            'SET_BIAYA' => fake()->optional()->randomNumber(1),
            'SET_HPP' => fake()->optional()->randomNumber(1),
        ];
    }
}
