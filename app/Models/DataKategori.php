<?php

namespace App\Models;

use App\Models\DataArtikel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DataKategori extends Model
{
    use HasFactory;
    protected $table="data_kategoris";
    protected $guarded = [];
    protected $timestamp = true;

    public function artikel() {
        return $this->hashMany(DataArtikel::class);
    }
}
