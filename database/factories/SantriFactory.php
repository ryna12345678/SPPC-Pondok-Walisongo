<?php

namespace Database\Factories;

use App\Models\Santri;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Santri>
 */
class SantriFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
    return [
        'nama' => fake()->name(),
        'kelas' => fake()->randomElement(['7A','7B','8A','8B','9A']),
        'asrama' => fake()->randomElement(['Asrama A','Asrama B','Asrama C']),
    ];
    }
}
