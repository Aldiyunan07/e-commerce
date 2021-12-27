<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameColumnThumbnailOnMetodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('metodes', function (Blueprint $table) {
            $table->renameColumn('thumbnail','wallet');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('metodes', function (Blueprint $table) {
            $table->renameColumn('wallet','thumbnail');
        });
    }
}
