<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ArtikelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'judul' => $this->faker->sentence(3),
            'kategori' => $this->faker->unique()->word(),
            'thumbnail'=> $this->faker->imageUrl(640, 480, 'animals', true),
            'author' => $this->faker->name(),
            'isi_artikel' => $this->faker->paragraph(100),
            'tanggal' => $this->faker->dateTime(),
            'user_id' => $this->faker->email()
        ];
    }
}
