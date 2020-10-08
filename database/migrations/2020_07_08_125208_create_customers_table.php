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
            $table->bigIncrements('id');
            $table->char('cust_name',30);
            $table->char('cust_mob',30)->nullable();
            $table->char('cust_tel',30)->nullable();
            $table->text('cust_email')->nullable();
            $table->char('cust_area',30)->nullable();
            $table->text('cust_address')->nullable();
            $table->bigInteger('cust_group')->unsigned()->nullable();

            $table->foreign('cust_group')->references('id')
            ->on('customer_group')->constrained()->onUpdate('cascade')->onDelete('SET NULL');

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
