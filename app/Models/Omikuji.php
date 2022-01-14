<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Omikuji extends Model
{
    use HasFactory;

    protected $table="omikuji";

    protected $fillable = [
        'id',
        'song',
        'explain',
        'fortune',
        'love',
        'aspiration',
        'work',
        'business',
        'dating',
        'gambling',
        'market',
        'sick',
        'lost',
        'job',
        'marriage',
    ];

}
