<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KriteriaTambahanUntukSaw extends Model
{
    use HasFactory;

    protected $table = "kriteria_umum_tambahan_untuk_saws";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'kategori_wisata_id', 'penjelasan', 'isBenefit', 'bobot', 'created_at', 'updated_at'
    ];

    public function kategoriWisata()
    {
        return $this->belongsTo(kategoriWisata::class);
    }
}
