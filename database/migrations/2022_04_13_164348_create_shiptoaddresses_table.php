<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShiptoaddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shiptoaddresses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id');
            $table->string('ship_id');
            $table->string('alamat_kirim1');
            $table->string('alamat_kirim2');
            $table->string('alamat_kirim3');
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
        Schema::dropIfExists('shiptoaddresses');
    }
}
