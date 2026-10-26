<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            [
                'id' => 1,
                'username' => 'admin',
                'name' => 'System Administrator',
                'role' => 'Administrator',
                'status' => 'Active'
            ],
            [
                'id' => 2,
                'username' => 'cashier1',
                'name' => 'Cashier One',
                'role' => 'Cashier',
                'status' => 'Active'
            ],
            [
                'id' => 3,
                'username' => 'cashier2',
                'name' => 'Cashier Two',
                'role' => 'Cashier',
                'status' => 'Active'
            ],
            [
                'id' => 4,
                'username' => 'manager1',
                'name' => 'Store Manager',
                'role' => 'Manager',
                'status' => 'Active'
            ],
            [
                'id' => 5,
                'username' => 'staff1',
                'name' => 'Staff Member One',
                'role' => 'Staff',
                'status' => 'Inactive'
            ],
        ];

        return view('users', compact('users'));
    }
}