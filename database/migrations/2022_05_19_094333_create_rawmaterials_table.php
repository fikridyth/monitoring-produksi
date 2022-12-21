<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRawmaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rawmaterials', function (Blueprint $table) {
            $table->id();
            $table->foreignId('rekaporder_id');
            $table->integer('slip_no');
            $table->integer('qty_perbundle');
            $table->integer('qty_bundle');
            $table->integer('last_bundle')->nullable();
            $table->integer('qty_pallet');
            $table->integer('pallet_no');
            $table->integer('total_received')->nullable();
            $table->date('gr_date');
            $table->string('dibuat');
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
        Schema::dropIfExists('rawmaterials');
    }
}
