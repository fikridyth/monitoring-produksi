<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchaseordersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchaseorders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('supplier_id');
            $table->string('no_sales');
            $table->string('no_po');
            $table->string('no_pr');
            $table->string('no_item');
            $table->date('date');
            $table->string('desc');
            $table->integer('panjang');
            $table->integer('lebar');
            $table->integer('lebar_paper');
            $table->integer('out_paper');
            $table->string('score');
            $table->string('substance');
            $table->string('flute');
            $table->integer('index');
            $table->integer('disc');
            $table->integer('qty');
            $table->date('date_delivery');
            $table->integer('price');
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
        Schema::dropIfExists('purchaseorders');
    }
}
