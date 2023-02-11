<?php

namespace App\Exports;

use App\Models\DataAnggota;
use Maatwebsite\Excel\Concerns\FromCollection;

class DataAnggotaExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DataAnggota::all();
    }
}
