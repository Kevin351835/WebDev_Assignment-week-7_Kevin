<?php

namespace Database\Factories;

use App\Models\Home;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Home>
 */
class HomeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
{
    return [
        'nama'      => 'Kevin Stello',
        'peran'     => $this->faker->randomElement([
            'Mahasiswa UC Makassar', 'Web Developer Pemula', 'Laravel Learner',
            'Frontend Enthusiast', 'Backend Explorer', 'Fast Learner',
        ]),
        'deskripsi' => $this->faker->sentence(6),
    ];
}
}
