<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\TNeraca;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\TNeraca>
 */
final class TNeracaFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var string
    */
    protected $model = TNeraca::class;

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
            'TANGGAL_PERIODE' => fake()->optional()->dateTime(),
            'KAS' => fake()->optional()->randomNumber(1),
            'PIUTANG_DAGANG' => fake()->optional()->randomNumber(1),
            'PERSEDIAAN' => fake()->optional()->randomNumber(1),
            'TANAH' => fake()->optional()->randomNumber(1),
            'GEDUNG' => fake()->optional()->randomNumber(1),
            'PENYUSUTAN_GED' => fake()->optional()->randomNumber(1),
            'PERALATAN' => fake()->optional()->randomNumber(1),
            'PENYUSUTAN_PERALATAN' => fake()->optional()->randomNumber(1),
            'HUTANG_JANGKA_PENDEK' => fake()->optional()->randomNumber(1),
            'HUTANG_JANGKA_PANJANG' => fake()->optional()->randomNumber(1),
            'MODAL' => fake()->optional()->randomNumber(1),
            'LABA_DITAHAN' => fake()->optional()->randomNumber(1),
            'LABA_BERJALAN' => fake()->optional()->randomNumber(1),
            'LABA_BERJALAN_2' => fake()->optional()->randomNumber(1),
            'LABA_BERJALAN_3' => fake()->optional()->randomNumber(1),
            'SET_ASSET' => fake()->optional()->randomNumber(1),
            'EBIT' => fake()->optional()->randomNumber(1),
            'OIS' => fake()->optional()->randomNumber(1),
        ];
    }
}
