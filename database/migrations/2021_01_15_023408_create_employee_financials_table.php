<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeFinancialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_financials', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employee_code');
            $table->unsignedBigInteger('bank_id')->nullable();
            $table->integer('basic_salary')->default(0);
            $table->integer('unfixed_salary')->default(0);
            $table->integer('basic_insurance')->default(0);
            $table->integer('unfixed_insurance')->default(0);
            $table->string('account_name')->nullable();
            $table->integer('housing_allowace')->default(0);
            $table->integer('food_allowace')->default(0);
            $table->integer('gazoline_allowace')->default(0);
            $table->integer('car_allowace')->default(0);
            $table->integer('social_insurance_cut')->default(0);
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
        Schema::dropIfExists('employee_financials');
    }
}
