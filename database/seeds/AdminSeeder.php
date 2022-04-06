<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'firstname' => 'admin',
            'lastname' => 'admin',
            'email' =>  'admin@gmail.com',
            'password' => bcrypt('testing1234'),
        ]);

        $admin->assignRole('admin');
    }
}
