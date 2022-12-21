<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->integer('cust_id')->unique();
            $table->string('cust_name');
            $table->string('no_npwp')->unique();
            $table->string('alamat1');
            $table->string('alamat2');
            $table->string('alamat3');
            $table->string('no_telp')->nullable();
            $table->string('co_person')->nullable();
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
        Schema::dropIfExists('customers');
    }
}
