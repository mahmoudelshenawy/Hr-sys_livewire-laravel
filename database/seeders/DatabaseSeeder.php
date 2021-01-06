<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(LaratrustSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(AppSettingsSeeder::class);
        $this->call(BusinessSetupSeeder::class);
        \App\Models\Branch::factory(10)->create();
    }
}
