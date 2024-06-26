<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTopRatedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('top_rated', function (Blueprint $table) {
            $table->increments('Kode_Film');
            $table->text('thumbnail');
            $table->string('Judul_Film');
            $table->string('Tahun_Rilis');
            $table->integer('ID_Genre');
            $table->string('Rating');
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
        Schema::dropIfExists('top_rated');
    }
}
