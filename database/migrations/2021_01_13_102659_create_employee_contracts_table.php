<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_contracts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employee_code');
            $table->unsignedBigInteger('employment_status_id');
            $table->unsignedBigInteger('branch_id');
            $table->unsignedBigInteger('administration_id');
            $table->unsignedBigInteger('department_id');
            $table->unsignedBigInteger('job_id');
            $table->unsignedBigInteger('supervisor_id')->nullable();
            $table->date('date_of_hiring')->nullable();
            $table->date('start_of_contract')->nullable();
            $table->date('end_of_contract')->nullable();
            $table->boolean('attendable')->default(0);
            $table->boolean('has_annual_vacation')->default(0);
            $table->integer('days_of_annual_vacation')->default(0);
            $table->boolean('has_terminal_bonus')->default(0);
            $table->integer('days_of_terminal_bonus')->default(0);
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
        Schema::dropIfExists('employee_contracts');
    }
}
