<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'username' => 'admin',
            'full_name' => 'Admin User',
        ]);

        User::create([
            'username' => 'cashier01',
            'full_name' => 'Cashier One',
        ]);

        User::create([
            'username' => 'cashier02',
            'full_name' => 'Cashier Two',
        ]);

        User::create([
            'username' => 'manager01',
            'full_name' => 'Manager User',
        ]);

        User::create([
            'username' => 'staff01',
            'full_name' => 'Staff User',
        ]);
    }
}