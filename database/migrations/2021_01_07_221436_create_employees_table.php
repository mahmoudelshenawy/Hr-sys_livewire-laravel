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
            $table->bigInteger('code')->unsigned();
            $table->primary('code');
            $table->string('profile', 255)->nullable();
            $table->string('name', 255);
            $table->string('en_name', 255)->nullable();
            $table->string('short_name', 255)->nullable();
            $table->enum('gender', ['male', 'female'])->nullable();
            $table->char('email', 50)->nullable();
            $table->char('phone', 20)->nullable();
            $table->char('alt_phone', 20)->nullable();
            $table->char('address', 100)->nullable();
            $table->char('religion', 10)->nullable();
            $table->date('birth_date', 15)->nullable();
            $table->string('birth_place', 15)->nullable();
            $table->enum('marital_status', ['single', 'married', 'divorced'])->nullable();
            $table->enum('military_service', ['passed', 'exempt', 'unclear'])->nullable();
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
