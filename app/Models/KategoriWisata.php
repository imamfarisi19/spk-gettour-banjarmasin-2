<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriWisata extends Model
{
    use HasFactory;

    protected $table = "kategori_wisatas";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'nama', 'linkDirect', 'isAktif', 'created_at', 'updated_at'];

    public function tempatWisata()
    {
        return $this->hasMany(KategoriWisata::class);
    }
}
