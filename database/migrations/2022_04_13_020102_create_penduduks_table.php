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
        Schema::create('penduduks', function (Blueprint $table) {
            $table->id();
            $table->string('nik');
            $table->string('kk');
            $table->string('nama');
            $table->tinyInteger('jenis_kelamin')->comment('1: Laki-laki, 2: Perempuan');
            $table->string('tempat_lahir', 32);
            $table->date('tanggal_lahir');
            $table->string('pekerjaan');
            $table->timestamps();
            $table->string('alamat');
            $table->string('banjar');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penduduks');
    }
};
