<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Currency extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()

    {
      Schema::create('currency', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->string('symbol')->unique();
      $table->string('code')->unique();
      $table->string('location')->unique();
      $table->string('decimals')->unique();
      $table->string('thousands_separator');
      $table->string('decimal_point');
      $table->string('denominations');
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
        Schema::dropIfExists('currency');
    }
}
