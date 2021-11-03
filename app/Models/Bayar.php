<?php
namespace App\Models;
use 
Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Bayar extends Model
{
    public function totalBayar($harga, $lama) {

        $totalBayar = $harga * $lama;

        return $totalBayar;
    }
    public function cetakTglbeli ($bayar) {
        return $bayar;
    }
    public function cetakLama($lama) {
        return $lama;
    }
    public function cetakPbayar($pbayar) {
        return $pbayar;
    }

}