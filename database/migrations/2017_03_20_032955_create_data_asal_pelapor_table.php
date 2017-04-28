<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataAsalPelaporTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_asal_pelapor', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_asal');
            $table->string('alamat_asal')->nullable();
            $table->string('no_kontak')->nullable();
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
        Schema::drop('data_asal_pelapor');
    }
}
