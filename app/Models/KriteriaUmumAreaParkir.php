<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KriteriaUmumAreaParkir extends Model
{
    use HasFactory;

    protected $table = "kriteria_umum_area_parkirs";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'tempat_wisata_id', 'bobot', 'created_at', 'updated_at'
    ];

    public function tempatWisata()
    {
        return $this->belongsTo(TempatWisata::class);
    }
}
