<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriWisata extends Model
{
    use HasFactory;

    public function kategoriWisataTempatWisata()
    {
        return $this->belongsToMany(KategoriWisata::class, 'id', 'id');
    }

    public function kategoriKriteriaTambahan()
    {
        return $this->belongsTo(KategoriWisata::class, 'id', 'id');
    }
}
