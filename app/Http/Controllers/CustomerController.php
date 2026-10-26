<?php

namespace App\Http\Controllers;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = [
            [
                'id' => 1,
                'name' => 'Juan Dela Cruz',
                'email' => 'juan@example.com',
                'phone' => '09171234567',
                'address' => 'Manila, Philippines'
            ],
            [
                'id' => 2,
                'name' => 'Maria Santos',
                'email' => 'maria@example.com',
                'phone' => '09181234567',
                'address' => 'Quezon City, Philippines'
            ],
            [
                'id' => 3,
                'name' => 'Pedro Garcia',
                'email' => 'pedro@example.com',
                'phone' => '09191234567',
                'address' => 'Pasig City, Philippines'
            ],
            [
                'id' => 4,
                'name' => 'Ana Reyes',
                'email' => 'ana@example.com',
                'phone' => '09201234567',
                'address' => 'Makati City, Philippines'
            ],
            [
                'id' => 5,
                'name' => 'Carlos Mendoza',
                'email' => 'carlos@example.com',
                'phone' => '09211234567',
                'address' => 'Cebu City, Philippines'
            ],
        ];

        return view('customers', compact('customers'));
    }
}