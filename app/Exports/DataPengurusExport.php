<?php

namespace App\Exports;

use App\Models\DataPengurus;
use Maatwebsite\Excel\Concerns\FromCollection;

class DataPengurusExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DataPengurus::all();
    }
}
