<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_genre',
        'cover_genre'
    ];

    public function music(){
        return $this->hasOne(Music::class);
    }
}
