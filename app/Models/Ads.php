<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ads extends Model
{

    public function ads($kategori, $judul, $merk, $namaProduk, $deskripsi, $hargaProduk, $link, $durasi)
    {
        
        return array(
            $kategori,
            $judul,
            $merk,
            $namaProduk,
            $deskripsi,
            $hargaProduk,
            $link,
            $durasi
        );
    }
}
