<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\TSyariah;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\TSyariah>
 */
final class TSyariahFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var string
    */
    protected $model = TSyariah::class;

    /**
    * Define the model's default state.
    *
    * @return array
    */
    public function definition(): array
    {
        return [
            'SY_SERTIFIKASI_HALAL' => fake()->optional()->randomNumber(),
            'SY_JUMLAH_HUTANG' => fake()->optional()->randomFloat(1, 0, 1.0E+19),
            'SY_AKAD_USAHA' => fake()->optional()->randomNumber(),
            'SY_JENIS_BARANG' => fake()->optional()->randomNumber(),
            'SY_PRESENTASE_NON_SYARIAH' => fake()->optional()->randomFloat(2, 0, 9999999),
            'ID_NASABAH' => fake()->optional()->word,
        ];
    }
}
