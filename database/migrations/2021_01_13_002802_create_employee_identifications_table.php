<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeIdentificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_identifications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employee_code');
            // $table->foreign('employee_code')->references('code')->on('employees')->onDelete('cascade');
            $table->char('passport_number', 25)->nullable();
            $table->date('passport_release_date')->nullable();
            $table->date('passport_expire_date')->nullable()->default(date("d/m/y"));
            $table->char('id_number', 25)->nullable();
            $table->date('id_release_date')->nullable();
            $table->date('id_expire_date')->nullable();
            $table->char('residency_number', 25)->nullable();
            $table->date('residency_release_date')->nullable();
            $table->date('residency_expire_date')->nullable();
            $table->string('residency_job')->nullable();
            $table->char('deriving_license_number', 25)->nullable();
            $table->date('license_release_date')->nullable();
            $table->date('license_expire_date')->nullable();
            $table->char('health_certification_number', 25)->nullable();
            $table->string('health_certification_description')->nullable();
            $table->date('health_certification_release_date')->nullable();
            $table->date('health_certification_expire_date')->nullable();
            $table->date('health_certification_cancel_date')->nullable();
            $table->unsignedBigInteger('country_id')->nullable();
            // $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');
            $table->unsignedBigInteger('sponsor_id')->nullable();
            // $table->foreign('sponsor_id')->references('id')->on('sponsors')->onDelete('cascade');
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
        Schema::dropIfExists('employee_identifications');
    }
}
