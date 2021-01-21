<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employee_code');
            $table->string('name');
            $table->enum('relation_level', array_keys(config('enums.companions')));
            $table->char('national_id', 20)->nullable();
            $table->char('residence_number', 20)->nullable();
            $table->string('birth_date')->nullable();
            $table->integer('medical_insurance_number')->nullable();
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
        Schema::dropIfExists('companions');
    }
}
