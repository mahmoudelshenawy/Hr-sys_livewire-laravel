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
            $table->bigIncrements('code');
            $table->string('profile', 255)->nullable();
            $table->string('name', 255);
            $table->string('en_name', 255)->nullable();
            $table->string('short_name', 255)->nullable();
            $table->char('email', 50)->nullable();
            $table->char('phone', 20)->nullable();
            $table->char('alt_phone', 20)->nullable();
            $table->char('address', 100)->nullable();
            $table->char('religion', 10)->nullable();
            $table->unsignedInteger('country_id')->nullable();
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');
            $table->char('birth_date', 15)->nullable();
            $table->char('passport_number', 25)->nullable();
            $table->char('id_number', 25)->nullable();
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
