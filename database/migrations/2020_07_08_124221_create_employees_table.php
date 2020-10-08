<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
             $table->bigIncrements('id');
             $table->char('emp_name', 30);
             $table->char('emp_gender', 30)->nullable();
             $table->char('emp_phone', 30)->nullable();
             $table->char('emp_marital', 30)->nullable();
             $table->char('emp_email', 30)->nullable();
             $table->char('emp_dob', 30)->nullable();
             $table->char('emp_nationality', 30)->nullable();
             $table->char('emp_address', 30)->nullable();
             $table->char('emp_cpr_no', 30)->nullable();
             $table->char('emp_passport_no', 30)->nullable();
             $table->char('emp_cpr_expire', 30)->nullable();
             $table->char('emp_passport_expire', 30)->nullable();
             $table->char('emp_working_as', 30)->nullable();
             $table->char('emp_department', 30)->nullable();
             $table->char('emp_designation', 30)->nullable();
             $table->char('emp_joining', 30)->nullable();
             $table->char('emp_ending', 30)->nullable();
             $table->char('emp_leaves', 30)->nullable();
             $table->char('emp_salary_transfer', 30)->nullable();
             $table->char('emp_basic_salary', 30)->nullable();
             $table->char('emp_employee_gosi', 30)->nullable();
             $table->char('emp_lmar_monthly', 30)->nullable();
             $table->char('emp_company_gosi', 30)->nullable();
             $table->char('emp_visa_fees', 30)->nullable();
             $table->char('emp_visa_expiry', 30)->nullable();
             $table->char('emp_bank', 30)->nullable();
             $table->char('emp_iban', 30)->nullable();
             $table->char('emp_files', 30)->nullable();
             $table->char('emp_blood', 30)->nullable();
             $table->char('emp_driving', 30)->nullable();
             $table->char('emp_emrc_name', 30)->nullable();
             $table->char('emp_emrc_number', 30)->nullable();
             $table->char('emp_emrc_relationship', 30)->nullable();
             $table->char('emp_commotions', 30)->nullable();
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
        Schema::dropIfExists('employees');
    }
}
