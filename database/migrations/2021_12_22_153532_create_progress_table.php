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
            $table->string('naskah')->nullable();
            $table->string('cetak')->nullable();
            $table->string('administrasi')->nullable();
            $table->string('antrianlayout')->nullable();
            $table->string('antriandesain')->nullable();
            $table->string('cover')->nullable();
            $table->string('layout')->nullable();
            $table->string('harga')->nullable();
            $table->string('isbn')->nullable();
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
