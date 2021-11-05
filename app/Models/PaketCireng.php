<?php
namespace App\Models;
use 
Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class PaketCireng extends Model
{
    public function totalBayar($harga, $lama) {

        $totalBayar = $harga * $lama;

        return $totalBayar;
    }

    public function ppnsepuluh($totalBayars)
    {
        $totalBayars = $totalBayars + ($totalBayars * 0.10);

        return $totalBayars;
    }

    public function ppnlima($totalBayars)
    {
        $totalBayars = $totalBayars + ($totalBayars * 0.05);

        return $totalBayars;
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