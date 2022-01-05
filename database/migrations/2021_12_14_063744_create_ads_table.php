<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ads', function (Blueprint $table) {
            $table->id();
            $table->string('kategori_produk');
            $table->string('judul_iklan');
            $table->string('merk');
            $table->string('deskripsi_produk');
            $table->string('nama_produk');
            $table->integer('harga');
            $table->string('link_website');
            $table->string('gambar_produk');
            $table->integer('durasi');
            $table->string("metode_pembayaran");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ads');
    }
}
