<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_artis',
        'id_music',
        'id_genre',
        'name_music',
        'description_music',
        'music',
        'menit'
    ];
}
