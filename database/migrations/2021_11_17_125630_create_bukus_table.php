<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBukusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bukus', function (Blueprint $table) {
            $table->id();
            $table->foreignId('penjual_id')->constrained()->references('id')->on('penjuals')->onDelete('cascade');
            $table->string('name');
            $table->string('thumbnail');
            $table->string('file');
            $table->string('penulis');
            $table->longText('deskripsi');
            $table->string('berat')->nullable();
            $table->string('status');
            $table->string('panjang')->nullable();
            $table->string('lebar')->nullable();
            $table->string('isbn')->nullable();
            $table->string('penerbit')->nullable();
            $table->string('slug');
            $table->integer('harga_awal');
            $table->longText('shopee')->nullable();
            $table->longText('tokopedia')->nullable();
            $table->longText('bukalapak')->nullable();
            $table->longText('sinopsis')->nullable();
            $table->integer('diskon');
            $table->integer('harga_asli');
            $table->foreignId('kategori_id')->constrained()->references('id')->on('kategoris')->onDelete('cascade');
            $table->integer('halaman');
            $table->string('bahasa');
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
        Schema::dropIfExists('bukus');
    }
}
