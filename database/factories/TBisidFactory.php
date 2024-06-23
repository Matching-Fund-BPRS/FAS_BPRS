<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\TBisid;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\TBisid>
 */
final class TBisidFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var string
    */
    protected $model = TBisid::class;

    /**
    * Define the model's default state.
    *
    * @return array
    */
    public function definition(): array
    {
        return [
            'ID_NASABAH' => fake()->word,
            'SEKTOR_EKONOMI_BI' => fake()->optional()->randomNumber(1),
            'PENGGUNAAN_BI' => fake()->optional()->randomNumber(1),
            'GOL_DEB_BI' => fake()->optional()->randomNumber(1),
            'SIFAT_BI' => fake()->optional()->randomNumber(1),
            'GOL_PENJAMIN_BI' => fake()->optional()->randomNumber(1),
            'TUJUAN_BI' => fake()->optional()->randomNumber(1),
            'GOL_PIUTANG_BI' => fake()->optional()->randomNumber(1),
            'SIFAT_PLAFOND' => fake()->optional()->randomNumber(1),
            'SEK_EKO_SID' => fake()->optional()->randomNumber(1),
            'PENGGUNAAN_SID' => fake()->optional()->randomNumber(1),
            'PEMBIAYAAN_SID' => fake()->optional()->randomNumber(1),
        ];
    }
}
