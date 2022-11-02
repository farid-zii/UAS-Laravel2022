<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasiens', function (Blueprint $table) {
            $table->id();
            $table->string('nama',50);
            $table->date('tgl_lahir');
            $table->char('jk',1);
            $table->foreignId('ruangan_id');
            $table->foreignId('nomor_id');
            $table->foreignId('penyakit_id');
            $table->foreignId('dokter_id');
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
        Schema::dropIfExists('pasiens');
    }
};
