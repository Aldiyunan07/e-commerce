<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenerbitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penerbits', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('gelar')->nullable();
            $table->string('no_hp');
            $table->string('judul_buku');
            $table->string('ebook');
            $table->string('email');
            $table->string('usia');
            $table->string('jk');
            $table->string('institusi');
            $table->string('pekerjaan');
            $table->integer('kode_pos');
            $table->string('ukuran');
            $table->string('jasa');
            $table->integer('jumlah_halaman');
            $table->integer('jumlah_cetakan');
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
        Schema::dropIfExists('penerbits');
    }
}