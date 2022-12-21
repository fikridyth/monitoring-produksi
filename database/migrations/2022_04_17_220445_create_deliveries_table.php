<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeliveriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deliveries', function (Blueprint $table) {
            $table->id();
            $table->foreignId('salesorder_id');
            $table->foreignId('driver_id');
            $table->foreignId('shiptoaddress_id');
            $table->string('no_delivery');
            $table->string('surat_jalan');
            $table->string('code_delivery');
            $table->date('date_delivery');
            $table->integer('qty_delivery');
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
        Schema::dropIfExists('deliveries');
    }
}
