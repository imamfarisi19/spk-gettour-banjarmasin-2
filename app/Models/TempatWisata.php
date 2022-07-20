<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TempatWisata extends Model
{
    use HasFactory;

    public function tempatWisataKelurahan()
    {
        return $this->hasMany(TempatWisata::class, 'kelurahanId', 'id');
    }

    public function tempatWisataKategori()
    {
        return $this->hasMany(TempatWisata::class, 'KategoriWisataId', 'id');
    }

    public function tempatWisataJarak()
    {
        return $this->hasOne(TempateWisata::class, 'id', 'id');
    }

    public function tempatWisataParkir()
    {
        return $this->hasOne(TempatWisata::class, 'id', 'id');
    }

    public function tempatWisataKhusus()
    {
        return $this->hasMany(TempatWisata::class, 'id', 'id');
    }

    public function tempatWisataUser()
    {
        return $this->hasMany(TempatWisata::class, 'id', 'id');
    }
}
