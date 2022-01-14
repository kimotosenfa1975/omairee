<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JishaEma extends Model
{
    use HasFactory;

    public function jisha() {
        return $this->belongsTo(Jisha::class)->withDefault();
    }
}
