<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artis extends Model
{
    use HasFactory;

    protected $fillable  = [
        'name_artis',
        'description_artis',
        'image'
    ];

    public function music(){
        return $this->hasMany(Music::class);
    }
}
