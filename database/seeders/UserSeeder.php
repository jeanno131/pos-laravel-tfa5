<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Admin User',
            'username' => 'admin',
            'full_name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('password123'),
        ]);

        User::create([
            'name' => 'Cashier One',
            'username' => 'cashier01',
            'full_name' => 'Cashier One',
            'email' => 'cashier01@example.com',
            'password' => Hash::make('password123'),
        ]);

        User::create([
            'name' => 'Cashier Two',
            'username' => 'cashier02',
            'full_name' => 'Cashier Two',
            'email' => 'cashier02@example.com',
            'password' => Hash::make('password123'),
        ]);

        User::create([
            'name' => 'Manager User',
            'username' => 'manager01',
            'full_name' => 'Manager User',
            'email' => 'manager01@example.com',
            'password' => Hash::make('password123'),
        ]);

        User::create([
            'name' => 'Staff User',
            'username' => 'staff01',
            'full_name' => 'Staff User',
            'email' => 'staff01@example.com',
            'password' => Hash::make('password123'),
        ]);
    }
}