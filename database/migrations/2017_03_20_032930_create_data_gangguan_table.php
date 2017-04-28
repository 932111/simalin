<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataGangguanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_gangguan', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_pelapor');
            $table->integer('id_jenis');
            $table->integer('id_aplikasi_atau_jaringan');
            $table->integer('id_media')->default(1);
            $table->text('detail')->nullable();
            $table->integer('id_status')->default(1);
            $table->string('no_track');
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
        Schema::drop('data_gangguan');

    }
}
