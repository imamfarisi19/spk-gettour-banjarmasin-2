<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    use HasFactory;


    protected $table = "kecamatans";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'nama', 'latitude', 'longitude', 'created_at', 'updated_at'
    ];

    public function kelurahan()
    {
        return $this->hasMany(Kelurahan::class);
    }

    public function tempatWisata()
    {
        return $this->hasManyThrough(TempatWisata::class, Kelurahan::class);
    }
}
