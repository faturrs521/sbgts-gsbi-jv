<?php

namespace App\Imports;

use App\Models\DataPengurus;
use Maatwebsite\Excel\Concerns\ToModel;

class DataPengurusImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new DataPengurus([
            'nik' => $row[1],
            'nama' => $row[2],
            'jeniskelamin' => $row[3],
            'jabatan' => $row[4],
            'dept' => $row[5],
            'foto' => $row[6]
        ]);
    }
}
