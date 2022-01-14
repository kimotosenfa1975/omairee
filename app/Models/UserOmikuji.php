<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserOmikuji extends Model
{
    use HasFactory;
    protected $table="user_omikuji";

    protected $fillable = [
        'user_id',
        'omikuji_id',
    ];

    public function omikuji() {
        return $this->belongsTo(Omikuji::class);
    }
}
