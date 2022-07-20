<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelurahan extends Model
{
    use HasFactory;

    public function kelurahanTempatWisata()
    {
        return $this->hasOne(Kelurahan::class, 'id', 'id');
    }

    public function kelurahanKecamatan()
    {
        return $this->hasOne(Kelurahan::class, 'kecamatanId', 'id');
    }
}
