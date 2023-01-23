<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class BeritaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'judul' => $this->faker->text(5),
            'headline' => $this->faker->unique()->text(5),
            'kategori' => $this->faker->unique()->text(5),
            'author' => $this->faker->name(),
            'isi_berita' => $this->faker->realText($maxNbChars = 100),
            'tanggal' => now(),
            'user_id' => $this->faker->email()
            
        ];
    }
}
