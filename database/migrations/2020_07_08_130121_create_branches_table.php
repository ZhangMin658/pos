<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBranchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branches', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('branch_name',255);
            $table->char('branch_area',255)->nullable();
            $table->char('branch_address',255)->nullable();
            $table->char('branch_tel',255)->nullable();
            $table->char('branch_mob',255)->nullable();
            $table->char('branch_location',255)->nullable();
            $table->char('branch_rent',255)->nullable();
            $table->char('branch_ewa_no',255)->nullable();
            $table->char('branch_municipality',255)->nullable();
            $table->char('branch_vat',255)->nullable();
            $table->char('branch_opening',255)->nullable();
            $table->char('branch_closing',255)->nullable();
            $table->char('branch_cr_no',255)->nullable();
            $table->char('branch_cr_exp',255)->nullable();
            $table->char('branch_target',255)->nullable();
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
        Schema::dropIfExists('branches');
    }
}
