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
            
            'judul' => $this->faker->sentence(3),
            'headline' => $this->faker->word(),
            'thumbnail'=> $this->faker->imageUrl(640, 480, 'animals', true),
            'kategori' => $this->faker->unique()->word(),
            'author' => $this->faker->name(),
            'isi_berita' => $this->faker->paragraph(100),
            'tanggal' => $this->faker->dateTime(),
            'user_id' => $this->faker->email()
            
        ];
        
    }
}
