<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHasilGangguanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hasil_gangguan', function (Blueprint $table)
        {
            $table->increments('id');
            $table->integer('id_gangguan');
            $table->integer('id_hasil_perbaikan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('hasil_gangguan');
    }
}
