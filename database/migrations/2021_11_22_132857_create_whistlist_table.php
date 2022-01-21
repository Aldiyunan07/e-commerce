<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWhistlistTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('whistlist', function (Blueprint $table) {
            $table->foreignid('user_id')->constrained()->references('id')->on('users')->onDelete('cascade');
            $table->foreignid('buku_id')->constrained()->references('id')->on('penjuals')->onDleete('cascade');
            $table->primary(['user_id','buku_id']);
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
        Schema::dropIfExists('whistlist');
    }
}
