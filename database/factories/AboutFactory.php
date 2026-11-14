<?php

namespace Database\Factories;

use App\Models\About;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<About>
 */
class AboutFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
{
    return [
        'nama'     => $this->faker->firstName(),
        'domisili' => $this->faker->city(),
        'angkatan' => (string) $this->faker->numberBetween(2022, 2025),
        'jurusan'  => $this->faker->randomElement(['Informatika', 'Informatika-AI', 'Sistem Informasi']),
        'smp'      => 'SMPN ' . $this->faker->numberBetween(1, 20) . ' ' . $this->faker->city(),
        'sma'      => 'SMAN ' . $this->faker->numberBetween(1, 20) . ' ' . $this->faker->city(),
    ];
}
}
