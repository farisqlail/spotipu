<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_artis',
        'name_album',
        'description_album',
        'cover'
    ];

    public function artis(){
        return $this->belongsTo(Artis::class, 'id_artis', 'id_artis');
    }
    
}
