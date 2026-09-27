<?php

namespace Database\Factories;

use App\Models\Catering;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Catering>
 */
class CateringFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
    return [
        'tanggal' => fake()->date(),
        'waktu' => fake()->randomElement(['Pagi','Siang','Malam']),
        'menu' => fake()->randomElement([
            'Nasi Ayam',
            'Nasi Soto',
            'Nasi Rawon',
            'Nasi Pecel'
        ]),
    ];
    }
}
