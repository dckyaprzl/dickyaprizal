<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDeskripsiToTableUpcoming extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('upcoming', function (Blueprint $table) {
            $table->text('deskripsi')->nullable()->after('ID_Genre');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('upcoming', function (Blueprint $table) {
            $table->dropColumn('deskripsi');
        });
    }
}
