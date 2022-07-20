<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KriteriaUmumJarak extends Model
{
    use HasFactory;

    public function jarakTempatWisata()
    {
        return $this->belongsTo(KriteriaUmumJarak::class, 'id', 'id');
    }
    
}
