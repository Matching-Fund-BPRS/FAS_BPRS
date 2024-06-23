<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Pbcattbl;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\Pbcattbl>
 */
final class PbcattblFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var string
    */
    protected $model = Pbcattbl::class;

    /**
    * Define the model's default state.
    *
    * @return array
    */
    public function definition(): array
    {
        return [
            'pbt_tnam' => fake()->optional()->word,
            'pbt_tid' => fake()->optional()->randomNumber(),
            'pbt_ownr' => fake()->optional()->word,
            'pbd_fhgt' => fake()->optional()->randomNumber(),
            'pbd_fwgt' => fake()->optional()->randomNumber(),
            'pbd_fitl' => fake()->optional()->word,
            'pbd_funl' => fake()->optional()->word,
            'pbd_fchr' => fake()->optional()->randomNumber(),
            'pbd_fptc' => fake()->optional()->randomNumber(),
            'pbd_ffce' => fake()->optional()->word,
            'pbh_fhgt' => fake()->optional()->randomNumber(),
            'pbh_fwgt' => fake()->optional()->randomNumber(),
            'pbh_fitl' => fake()->optional()->word,
            'pbh_funl' => fake()->optional()->word,
            'pbh_fchr' => fake()->optional()->randomNumber(),
            'pbh_fptc' => fake()->optional()->randomNumber(),
            'pbh_ffce' => fake()->optional()->word,
            'pbl_fhgt' => fake()->optional()->randomNumber(),
            'pbl_fwgt' => fake()->optional()->randomNumber(),
            'pbl_fitl' => fake()->optional()->word,
            'pbl_funl' => fake()->optional()->word,
            'pbl_fchr' => fake()->optional()->randomNumber(),
            'pbl_fptc' => fake()->optional()->randomNumber(),
            'pbl_ffce' => fake()->optional()->word,
            'pbt_cmnt' => fake()->optional()->word,
        ];
    }
}
