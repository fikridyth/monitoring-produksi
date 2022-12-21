<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id();
            $table->string('sup_name');
            $table->string('no_npwp')->unique();
            $table->string('alamat1');
            $table->string('alamat2');
            $table->string('no_telp')->nullable();
            $table->string('no_telp2')->nullable();
            $table->string('cp_person')->nullable();
            $table->string('cp_telp')->nullable();
            $table->string('jenis_produk')->nullable();
            $table->string('terms')->nullable();
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
        Schema::dropIfExists('suppliers');
    }
}
