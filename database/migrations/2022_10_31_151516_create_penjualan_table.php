<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenjualanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penjualan', function (Blueprint $table) {
            $table->string('no');
            $table->string('id_obat');
            $table->string('id_pasien');
            $table->date('tanggal');
            $table->integer('total_bayar');
            $table->timestamps();

            $table->foreign('id_obat')->references('id_obat')->on('obat');
            $table->foreign('id_pasien')->references('id_pasien')->on('pasien');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penjualan');
    }
}
