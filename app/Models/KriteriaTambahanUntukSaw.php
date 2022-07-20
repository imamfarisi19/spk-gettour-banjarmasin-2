<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KriteriaTambahanUntukSaw extends Model
{
    use HasFactory;

    public function kriteriaTambahanKategori()
    {
        return $this->belongsTo(KriteriaTambahanUntukSaw::class, 'kategoriWisataId', 'id');
    }
}
