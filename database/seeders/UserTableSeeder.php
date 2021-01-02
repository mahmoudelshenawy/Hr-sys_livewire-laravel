<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = \App\Models\User::create([
            'name' => 'super admin',
            'email' => 'super_admin@gmail.com',
            'password' => bcrypt('1234567')
        ]);

        $user->attachRole('super_admin');
    }
}
