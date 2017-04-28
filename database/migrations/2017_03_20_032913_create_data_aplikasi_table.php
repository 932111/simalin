<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataAplikasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_aplikasi', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->integer('id_pemakai');
            $table->string('nama_pengembang');
            $table->string('kontak_pengembang')->unique();
            $table->integer('id_jenis');
            $table->string('deskripsi_aplikasi')->nullabel();
            $table->rememberToken();
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
        Schema::drop('data_aplikasi');
    }
}
