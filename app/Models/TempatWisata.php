<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TempatWisata extends Model
{
    use HasFactory;

    protected $table = "tempat_wisatas";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'nama', 'isAktif', 'linkInternet', 'kategori_wisata_id', 'kelurahan_id', 'latitude', 'longitude', 'deskripsi', 'user_id', 'created_at', 'updated_at'
    ];

    public function kelurahan()
    {
        return $this->belongsTo(Kelurahan::class);
    }

    public function kriteriaKhusus()
    {
        return $this->hasOne(KriteriaKhusus::class);
    }

    public function kriteriaUmumAreaParkir()
    {
        return $this->hasOne(KriteriaUmumAreaParkir::class);
    }

    public function kriteriaUmumJarak()
    {
        return $this->hasOne(KriteriaUmumJarak::class);
    }

    public function kategoriWisata()
    {
        return $this->belongsTo(KategoriWisata::class);
    }

    public function user()
    {
        return $this->belongsTo(user::class);
    }

}
