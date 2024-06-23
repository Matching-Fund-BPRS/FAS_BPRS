<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\TDaftarProyek;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\TDaftarProyek>
 */
final class TDaftarProyekFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var string
    */
    protected $model = TDaftarProyek::class;

    /**
    * Define the model's default state.
    *
    * @return array
    */
    public function definition(): array
    {
        return [
            'ID_NASABAH' => fake()->optional()->word,
            'PROYEK' => fake()->optional()->word,
            'JENIS_PROYEK' => fake()->optional()->word,
            'LOKASI' => fake()->optional()->word,
            'TGL_MULAI' => fake()->optional()->date(),
            'TGL_AKHIR' => fake()->optional()->date(),
            'NILAI' => fake()->optional()->word,
        ];
    }
}
