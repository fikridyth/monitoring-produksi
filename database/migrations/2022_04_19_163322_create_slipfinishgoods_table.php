<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlipfinishgoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slipfinishgoods', function (Blueprint $table) {
            $table->id();
            $table->foreignId('manufacturingorder_id');
            $table->integer('no_slip');
            $table->integer('no_pallet');
            $table->date('date_gr');
            $table->integer('qty_order');
            $table->integer('qty_perbundle');
            $table->integer('qty_bundle')->nullable();
            $table->integer('qty_last')->nullable();
            $table->integer('qty_pallet')->nullable();
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
        Schema::dropIfExists('slipfinishgoods');
    }
}
