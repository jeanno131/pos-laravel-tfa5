<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            [
                'id' => 'U001',
                'name' => 'Admin User',
                'email' => 'admin@example.com',
                'role' => 'Administrator',
            ],
            [
                'id' => 'U002',
                'name' => 'Cashier One',
                'email' => 'cashier1@example.com',
                'role' => 'Cashier',
            ],
            [
                'id' => 'U003',
                'name' => 'Cashier Two',
                'email' => 'cashier2@example.com',
                'role' => 'Cashier',
            ],
            [
                'id' => 'U004',
                'name' => 'Manager User',
                'email' => 'manager@example.com',
                'role' => 'Manager',
            ],
            [
                'id' => 'U005',
                'name' => 'Staff User',
                'email' => 'staff@example.com',
                'role' => 'Staff',
            ],
        ];

        return view('users.index', compact('users'));
    }
}