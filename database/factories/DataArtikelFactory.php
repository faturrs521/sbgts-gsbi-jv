<?php

namespace Database\Factories;
use App\Models\DataArtikel;
use App\Models\DataKategori;
use Illuminate\Database\Eloquent\Factories\Factory;

class DataArtikelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'kategori_id'=>DataKategori::inRandomOrder()->orderBy('id')->first(),
            'judul'=>$this->faker->title,
            'deskripsi'=>$this->faker->paragraph,
        ];
    }
}
