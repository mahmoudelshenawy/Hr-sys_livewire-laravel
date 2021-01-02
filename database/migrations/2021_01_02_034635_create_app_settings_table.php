<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('app_settings', function (Blueprint $table) {
            $table->id();
            $table->enum('nav_direction', ['hor', 'vert'])->default('hor');
            $table->enum('lang', ['ar', 'en'])->default('ar');
            $table->string('timezone')->default('UTC');
            $table->string('company_name')->nullable();
            $table->string('logo')->nullable();
            $table->enum('theme_color', ['dark', 'light'])->default('light');
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
        Schema::dropIfExists('app_settings');
    }
}
