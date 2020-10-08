<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMerchantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('merchant', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('merchant_name',255)->nullable();
            $table->char('merchant_area',255)->nullable();
            $table->char('merchant_address',255)->nullable();
            $table->char('merchant_tel',255)->nullable();
            $table->char('merchant_mob',255);
            $table->char('merchant_location',255)->nullable();
            $table->char('merchant_instgram',255)->nullable();
            $table->char('merchant_whatsapp',255)->nullable();
            $table->char('merchant_email',255);

            $table->char('merchant_logo',255)->nullable(); // image
            $table->char('merchant_stamp',255)->nullable(); // image

            $table->char('mid',255)->nullable();
            $table->char('expirey',255)->nullable();
            $table->char('package',255)->nullable();
            $table->char('ecommerce',255)->nullable();
            $table->char('payment',255)->nullable();
            $table->char('device',255)->nullable();

            
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
        Schema::dropIfExists('merchant');
    }
}
