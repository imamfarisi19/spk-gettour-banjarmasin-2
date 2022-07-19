<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TempatWisata extends Model
{
    use HasFactory;

    public function tempatWisataKelurahan()
    {
        return $this->hasMany(Kelurahan::class, 'kelurahanId', 'id');
    }
}
