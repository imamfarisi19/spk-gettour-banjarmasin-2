<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KriteriaUmumAreaParkir extends Model
{
    use HasFactory;

    public function parkirTempatWisata()
    {
        return $this->belongsTo(KriteriaUmumAreaParkir::class, 'id', 'id');
    }
}
