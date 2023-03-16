<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DataKategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\DataKategori::insert([
            ['nama' => 'Demonstrasi'],
            ['nama' => 'Meeting'],
            ['nama' => 'Program Kerja'],
        ]);
    }
}



