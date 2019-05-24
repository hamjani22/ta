<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIrigasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('irigasi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamp('tanggal');
            $table->string('suhu');
            $table->string('kadar_oksigen');
            $table->string('kadar_ph');
            $table->string('residu_terlarut');
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
        Schema::dropIfExists('irigasi');
    }
}
