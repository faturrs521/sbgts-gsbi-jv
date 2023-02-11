<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataAnggotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('data_anggotas')->insert([
            'nik' => '022601',
            'nama' => 'Fatur Roman Setiyono',
            'jeniskelamin' => 'pria',
            'kodedept' => 'SA1311',
            'dept' => 'Fty1 Assembly Line 11',
            'tmk' => '20-Dec-18',
        ]);
    }
}
