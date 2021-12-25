<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBeratOnBukusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bukus', function (Blueprint $table) {
            $table->string('berat')->after('penulis')->nullable();
            $table->string('panjang')->after('deskripsi')->nullable();
            $table->string('lebar')->after('deskripsi')->nullable();
            $table->string('isbn')->after('deskripsi')->nullable();
            $table->string('penerbit')->after('deskripsi')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
