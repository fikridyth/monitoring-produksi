<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRekapordersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rekaporders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('purchaseorder_id');
            $table->integer('qty_po')->nullable();
            $table->integer('qty_kirim')->nullable();
            $table->string('status')->nullable();
            $table->string('keterangan')->nullable();
            $table->integer('outstanding')->nullable();
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
        Schema::dropIfExists('rekaporders');
    }
}
