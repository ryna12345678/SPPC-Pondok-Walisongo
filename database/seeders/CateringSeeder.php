<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CateringSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    \App\Models\Catering::create([
        'tanggal' => now()->toDateString(),
        'waktu' => 'Pagi',
        'menu' => 'Nasi Ayam',
    ]);

    \App\Models\Catering::factory(4)->create();
    }
}
