<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDokterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dokter', function (Blueprint $table) {
            $table->string('id_dokter');
            $table->string('id_poli');
            $table->string('nama_dokter');
            $table->string('alamat');
            $table->string('no_ponsel');
            $table->timestamps();
            $table->primary('id_dokter');

            
            $table->foreign('id_poli')->references('id_poli')->on('poli');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dokter');
    }
}
