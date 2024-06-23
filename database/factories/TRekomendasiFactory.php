<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\TRekomendasi;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\TRekomendasi>
 */
final class TRekomendasiFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var string
    */
    protected $model = TRekomendasi::class;

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
            'SIFAT_KREDIT' => fake()->optional()->randomNumber(1),
            'JENIS_PERMOHONAN' => fake()->optional()->randomNumber(1),
            'TUJUAN' => fake()->optional()->randomNumber(1),
            'JANGKA_WAKTU' => fake()->optional()->randomNumber(),
            'BUNGA' => fake()->optional()->randomNumber(1),
            'ANGSURAN' => fake()->optional()->randomNumber(1),
            'JAMINAN' => fake()->optional()->randomNumber(1),
            'KETENTUAN' => fake()->optional()->randomNumber(1),
            'PROVISI' => fake()->optional()->randomNumber(1),
            'ADMINISTRASI' => fake()->optional()->randomNumber(1),
            'LAINNYA' => fake()->optional()->randomNumber(1),
            'BAYAR_POKOK' => fake()->optional()->randomNumber(),
            'MATERAI' => fake()->optional()->randomNumber(1),
            'NOTARIS' => fake()->optional()->randomNumber(1),
            'ASURANSI' => fake()->optional()->randomNumber(1),
            'MODAL' => fake()->optional()->randomNumber(1),
            'BASIL_BANK' => fake()->optional()->randomNumber(1),
            'BASIL_DEB' => fake()->optional()->randomNumber(1),
        ];
    }
}
