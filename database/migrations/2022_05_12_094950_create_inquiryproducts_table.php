<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInquiryproductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inquiryproducts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('slipfinishgood_id');
            $table->integer('slitter_product')->nullable();
            $table->integer('slitter_reject')->nullable();
            $table->integer('printing_product')->nullable();
            $table->integer('printing_reject')->nullable();
            $table->integer('slotter_product')->nullable();
            $table->integer('slotter_reject')->nullable();
            $table->integer('glue_product')->nullable();
            $table->integer('glue_reject')->nullable();
            $table->integer('pond_product')->nullable();
            $table->integer('pond_reject')->nullable();
            $table->integer('qty_finish');
            $table->integer('waste_product');
            $table->integer('qty_product');
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
        Schema::dropIfExists('inquiryproducts');
    }
}
