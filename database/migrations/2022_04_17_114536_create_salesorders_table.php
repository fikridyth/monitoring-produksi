<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesordersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salesorders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mastercard_id');
            $table->string('no_mc');
            $table->string('no_sales');
            $table->string('po_customer');
            $table->date('jadwal_kirim');
            $table->integer('quantity');
            $table->integer('harga_barang');
            $table->date('date');
            $table->integer('total_harga')->nullable();
            $table->integer('total_datang')->nullable();
            $table->integer('kurang_datang')->nullable();
            $table->integer('masuk_barang')->nullable();
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
        Schema::dropIfExists('salesorders');
    }
}
