<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ads extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_ads',
        'description_ads',
        'price'
    ];

    public function total($biayaIklan, $durasi)
    {
        $total = $biayaIklan * $durasi;


        return $total;
    }
}
