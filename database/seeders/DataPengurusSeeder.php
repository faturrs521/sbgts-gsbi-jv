<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataPengurusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('data_penguruses')->insert([
            'nik' => '022601',
            'nama' => 'Fatur Roman Setiyono',
            'jeniskelamin' => 'pria',
            'jabatan' => 'korlap',
            'dept' => 'Fty1 Assembly Line 11',
        ]);
    }
}
