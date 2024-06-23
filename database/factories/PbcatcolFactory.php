<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Pbcatcol;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\Pbcatcol>
 */
final class PbcatcolFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var string
    */
    protected $model = Pbcatcol::class;

    /**
    * Define the model's default state.
    *
    * @return array
    */
    public function definition(): array
    {
        return [
            'pbc_tnam' => fake()->optional()->word,
            'pbc_tid' => fake()->optional()->randomNumber(),
            'pbc_ownr' => fake()->optional()->word,
            'pbc_cnam' => fake()->optional()->word,
            'pbc_cid' => fake()->optional()->randomNumber(),
            'pbc_labl' => fake()->optional()->word,
            'pbc_lpos' => fake()->optional()->randomNumber(),
            'pbc_hdr' => fake()->optional()->word,
            'pbc_hpos' => fake()->optional()->randomNumber(),
            'pbc_jtfy' => fake()->optional()->randomNumber(),
            'pbc_mask' => fake()->optional()->word,
            'pbc_case' => fake()->optional()->randomNumber(),
            'pbc_hght' => fake()->optional()->randomNumber(),
            'pbc_wdth' => fake()->optional()->randomNumber(),
            'pbc_ptrn' => fake()->optional()->word,
            'pbc_bmap' => fake()->optional()->word,
            'pbc_init' => fake()->optional()->word,
            'pbc_cmnt' => fake()->optional()->word,
            'pbc_edit' => fake()->optional()->word,
            'pbc_tag' => fake()->optional()->word,
        ];
    }
}
