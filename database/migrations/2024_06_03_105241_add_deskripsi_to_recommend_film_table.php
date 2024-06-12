<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDeskripsiToRecommendFilmTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('recommend_film', function (Blueprint $table) {
            $table->text('deskripsi')->nullable()->after('Rating');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('recommend_film', function (Blueprint $table) {
            $table->dropColumn('deskripsi');
        });
    }
}

