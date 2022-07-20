<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kriteriaKhusus extends Model
{
    use HasFactory;

    public function khususTempatWisata()
    {
        return $this->belongsToMany(kriteriaKhusus::class, 'tempatWisataId', 'id');
    }
}
