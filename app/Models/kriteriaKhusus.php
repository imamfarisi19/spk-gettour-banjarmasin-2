<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kriteriaKhusus extends Model
{
    use HasFactory;

    protected $table = "kriteria_khususes";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'tempat_wisata_id', 'kriteriaKhusus1', 'kriteriaKhusus2', 'kriteriaKhusus3', 'created_at', 'updated_at'
    ];

    public function tempatWisata()
    {
        return $this->belongsTo(TempatWisata::class);
    }
}
