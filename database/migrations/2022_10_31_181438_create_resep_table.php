<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResepTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resep', function (Blueprint $table) {
            $table->string('id_resep');
            $table->string('id_dokter');
            $table->string('id_pasien');
            $table->string('resep_dokter');
            $table->timestamps();
            $table->primary('id_resep');

            $table->foreign('id_dokter')->references('id_dokter')->on('dokter');
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
        Schema::dropIfExists('resep');
    }
}
