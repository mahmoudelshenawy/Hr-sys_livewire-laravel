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
        $this->call(CountriesSeeder::class);
        $this->call(EmployeeSeeder::class);
        \App\Models\Branch::factory(10)->create();
        \App\Models\Administration::factory(10)->create();
        \App\Models\Department::factory(10)->create();
        \App\Models\Job::factory(10)->create();
        \App\Models\EmploymentStatus::factory(10)->create();
    }
}
