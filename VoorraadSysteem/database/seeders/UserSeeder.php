<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'naam' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin'),
                'role_id' => 1,
            ],
            [
                'naam' => 'manager',
                'email' => 'manager@gmail.com',
                'password' => Hash::make('manager'),
                'role_id' => 2,
            ],
            [
                'naam' => 'employee',
                'email' => 'employee@gmail.com',
                'password' => Hash::make('employee'),
                'role_id' => 3,
            ]
        ]);
    }
}
