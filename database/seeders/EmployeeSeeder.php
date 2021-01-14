<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Employee::create([
            'code' => 122,
            'profile' => 'public/employees/YHkwnXDR6QcBSoGqBV2OLIKialqXkHHqDe0N3ftO.jpg',
            'name' => 'Mahmoud',
            'gender' => 'male',
            'email' => 'admin@gmail.com',
            'phone' => '12345678',
            'marital_status' => 'single'
        ]);
    }
}
