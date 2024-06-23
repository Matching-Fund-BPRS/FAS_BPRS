<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\TFa;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\TFa>
 */
final class TFaFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var string
    */
    protected $model = TFa::class;

    /**
    * Define the model's default state.
    *
    * @return array
    */
    public function definition(): array
    {
        return [
            'ID_NASABAH' => fake()->optional()->randomNumber(3),
            'KODE' => fake()->optional()->randomNumber(1),
            'BANK' => fake()->optional()->randomNumber(1),
            'JENIS_KREDIT' => fake()->optional()->randomNumber(1),
            'PLAFOND' => fake()->optional()->randomNumber(1),
            'BAKI_DEBET' =>  fake()->optional()->randomNumber(1),
            'TGL_JATUH_TEMPO' => fake()->optional()->date(),
            'KOL' => fake()->optional()->randomNumber(1),
            'TUNGGAKAN' => fake()->optional()->randomNumber(1),
            'LAMA_TUNGGAKAN' => fake()->optional()->randomNumber(1),
            'KET' => fake()->optional()->word,
        ];
    }
}
