<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{

    public function run()
    {
        \App\Models\Employee::create([
            'code' => 122,
            'profile' => 'storage/employees/images/122/ga9PIsGXYTJzNkK4mGBzNvcEmG9SGBJyuYLBttyC.jpg',
            'name' => 'Mahmoud',
            'gender' => 'male',
            'email' => 'admin@gmail.com',
            'phone' => '12345678',
            'marital_status' => 'single'
        ]);
    }
}
