<?php

namespace App\Models;

use App\Models\DataKategori;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DataArtikel extends Model
{
    use HasFactory;
    protected $table='data_artikels';
    protected $guarded = [];
    protected $timestamp = true;


    public function dataKategori() {
        return $this->belongsTo(DataKategori::class,'Kategori_id','id');
    }
}
