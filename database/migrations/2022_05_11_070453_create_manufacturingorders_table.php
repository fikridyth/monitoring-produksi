<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManufacturingordersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manufacturingorders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('salesorder_id');
            $table->string('no_mo');
            $table->integer('no_urut');
            $table->string('keterangan');
            $table->string('qty_shortage')->nullable();
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
        Schema::dropIfExists('manufacturingorders');
    }
}
