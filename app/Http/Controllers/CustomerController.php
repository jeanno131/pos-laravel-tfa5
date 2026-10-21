<?php

namespace App\Http\Controllers;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = [
            [
                'id' => 'C001',
                'name' => 'Juan Dela Cruz',
                'email' => 'juan@example.com',
                'phone' => '09171234567',
            ],
            [
                'id' => 'C002',
                'name' => 'Maria Santos',
                'email' => 'maria@example.com',
                'phone' => '09181234567',
            ],
            [
                'id' => 'C003',
                'name' => 'Pedro Reyes',
                'email' => 'pedro@example.com',
                'phone' => '09191234567',
            ],
            [
                'id' => 'C004',
                'name' => 'Ana Garcia',
                'email' => 'ana@example.com',
                'phone' => '09201234567',
            ],
            [
                'id' => 'C005',
                'name' => 'Carlo Mendoza',
                'email' => 'carlo@example.com',
                'phone' => '09211234567',
            ],
        ];

        return view('customers.index', compact('customers'));
    }
}