<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jisha extends Model
{
    use HasFactory;

    public function jishaemas() {
        return $this->hasMany(JishaEma::class);
    }

    public function jishasaisens() {
        return $this->hasMany(JishaSaisen::class);
    }
}
