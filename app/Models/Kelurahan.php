<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelurahan extends Model
{
    use HasFactory;

    protected $table = "kelurahans";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'nama', 'tempat_wisata_id', 'latitude', 'longitude', 'created_at', 'updated_at'
    ];

    public function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class);
    }

    public function tempatWisata()
    {
        return $this->hasMany(TempatWisata::class);
    }
}
