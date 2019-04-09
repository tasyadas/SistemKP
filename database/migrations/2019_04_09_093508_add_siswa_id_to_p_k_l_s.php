<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSiswaIdToPKLS extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('p_k_l_s', function (Blueprint $table) {
            $table->integer('siswa_id')->unsigned()->nullable();
            $table->foreign('siswa_id')->references('id')->on('siswas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('p_k_l_s', function (Blueprint $table) {
            $table->dropColumn('siswa_id');            
        });
    }
}
