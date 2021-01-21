<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePayrollAbsencePenaltiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payroll_absence_penalties', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employee_code');
            $table->string('month')->nullable();
            $table->integer('days')->nullable();
            $table->integer('amount');
            // $table->foreign('employee_code')->references('code')->on('employees')->onDelete('cascade');
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
        Schema::dropIfExists('payroll_absence_penalties');
    }
}
