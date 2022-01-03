<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMusicTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('music', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_artis')->index();
            $table->bigInteger('id_album')->index()->nullable();
            $table->bigInteger('id_genre')->index();
            $table->string('name_music');
            $table->longText('description_music');
            $table->string('music');
            $table->string('cover_music');
            $table->string('menit');
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
        Schema::dropIfExists('music');
    }
}
