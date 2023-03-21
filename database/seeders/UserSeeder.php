<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $admin = User::create([
            'name' => 'admin 1',
            'email'=> 'admin@role.test',
            'password' => bcrypt('1234567890'),
        ]);
        $admin->assignRole('admin');

        $user = User::create([
            'name' => 'user 1',
            'email'=> '@role.test',
            'password' => bcrypt('1234567890'),
        ]);
        $user->assignRole('user');
    }
}
