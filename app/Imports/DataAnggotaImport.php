<?php

namespace App\Imports;

use App\Models\DataAnggota;
use Maatwebsite\Excel\Concerns\ToModel;

class DataAnggotaImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new DataAnggota([
            'nik' => $row[1],
            'nama' => $row[2],
            'jeniskelamin' => $row[3],
            'kodedept' => $row[4],
            'dept' => $row[5],
            'tmk' => $row[6]
        ]);
    }
}
