<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('progress', function (Blueprint $table) {
            $table->id();
            $table->foreignId('penerbit_id')->constarined()->references('id')->on('penerbits')->onDelete('cascade');
            $table->string('laporan')->nullable();
            $table->string('naskah')->nullable();
            $table->string('produksi')->nullable();
            $table->string('administrasi')->nullable();
            $table->string('antrian')->nullable();
            $table->string('cover')->nullable();
            $table->string('layout')->nullable();
            $table->string('harga')->nullable();
            $table->string('deal_harga')->nullable();
            $table->date('masuk')->nullable();
            $table->date('keluar')->nullable();
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
        Schema::dropIfExists('progress');
    }
}
