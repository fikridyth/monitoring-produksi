<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMastercardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mastercards', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id');
            $table->string('no_mc');
            $table->string('komposisi')->nullable();
            $table->string('deskripsi');
            $table->string('model_box');
            $table->integer('panjang');
            $table->integer('lebar');
            $table->integer('tinggi');
            $table->string('substance');
            $table->string('flute')->nullable();
            $table->string('joint')->nullable();
            $table->string('jumlah_warna')->nullable();
            $table->string('kode_proses')->nullable();
            $table->string('other')->nullable();
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
        Schema::dropIfExists('mastercards');
    }
}
