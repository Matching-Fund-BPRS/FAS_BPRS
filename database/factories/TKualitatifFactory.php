<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\TKualitatif;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\TKualitatif>
 */
final class TKualitatifFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var string
    */
    protected $model = TKualitatif::class;

    /**
    * Define the model's default state.
    *
    * @return array
    */
    public function definition(): array
    {
        return [
            'ID_NASABAH' => fake()->word,
            'LEG_PENDIRIAN' => fake()->optional()->randomNumber(),
            'LEG_PENDIRIAN_NO' => fake()->optional()->word,
            'LEG_USAHA' => fake()->optional()->randomNumber(),
            'LEG_USAHA_NO' => fake()->optional()->word,
            'LEG_PEMOHON' => fake()->optional()->randomNumber(),
            'LEG_PEMOHON_NO' => fake()->optional()->word,
            'LEG_LAIN1' => fake()->optional()->randomNumber(),
            'LEG_LAIN1_NO' => fake()->optional()->word,
            'LEG_LAIN2' => fake()->optional()->randomNumber(),
            'LEG_LAIN2_NO' => fake()->optional()->word,
            'LEG_LAIN3' => fake()->optional()->randomNumber(),
            'LEG_LAIN3_NO' => fake()->optional()->word,
            'PEM_PESAING' => fake()->optional()->randomNumber(),
            'PEM_REPUTASI' => fake()->optional()->randomNumber(),
            'PEM_PELANGGAN' => fake()->optional()->randomNumber(),
            'PEM_KETERGANTUNGAN' => fake()->optional()->randomNumber(),
            'PEM_KEBUTUHAN' => fake()->optional()->randomNumber(),
            'MAN_KEJUJURAN' => fake()->optional()->randomNumber(),
            'MAN_KEMAUAN' => fake()->optional()->randomNumber(),
            'MAN_REPUTASI' => fake()->optional()->randomNumber(),
            'TEH_UTILISASI' => fake()->optional()->randomNumber(),
            'TEH_PENGADAAN' => fake()->optional()->randomNumber(),
            'TES_REPUTASI' => fake()->optional()->randomNumber(),
            'TEH_KETERGANTUNGAN' => fake()->optional()->randomNumber(),
            'TEH_SPESIFIKASI' => fake()->optional()->randomNumber(),
            'TEH_LAMA_USAHA' => fake()->optional()->randomNumber(),
            'TGL_PENDIRIAN' => fake()->optional()->date(),
            'TGL_USAHA' => fake()->optional()->date(),
            'TGL_PEMOHON' => fake()->optional()->dateTime(),
            'TGL_LAIN1' => fake()->optional()->date(),
            'TGL_LAIN2' => fake()->optional()->date(),
            'TGL_LAIN3' => fake()->optional()->date(),
            'NPWP' => fake()->optional()->word,
            'NPWP_TGL' => fake()->optional()->date(),
            'TDP' => fake()->optional()->word,
            'TDP_TGL' => fake()->optional()->dateTime(),
            'SITU' => fake()->optional()->word,
            'SITU_TGL' => fake()->optional()->date(),
            'IJIN_HO' => fake()->optional()->word,
            'HO_TGL' => fake()->optional()->date(),
        ];
    }
}
