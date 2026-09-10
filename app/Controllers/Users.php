<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index(): string
    {
        $users = [
            ['username' => 'admin', 'full_name' => 'Alex Nicolas', 'role' => 'Administrator'],
            ['username' => 'manager01', 'full_name' => 'Patricia Ramos', 'role' => 'Manager'],
            ['username' => 'cashier01', 'full_name' => 'Daniel Flores', 'role' => 'Cashier'],
            ['username' => 'cashier02', 'full_name' => 'Nicole Bautista', 'role' => 'Cashier'],
            ['username' => 'staff01', 'full_name' => 'Miguel Torres', 'role' => 'Staff'],
        ];

        return view('users/index', [
            'title' => 'User Accounts',
            'activePage' => 'users',
            'users' => $users,
        ]);
    }
}
