<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $users = [
            [
                'username' => 'admin',
                'full_name' => 'Francine Agalabia',
                'role' => 'Administrator',
            ],
            [
                'username' => 'cashier01',
                'full_name' => 'John Villanueva',
                'role' => 'Cashier',
            ],
            [
                'username' => 'cashier02',
                'full_name' => 'Anna Flores',
                'role' => 'Cashier',
            ],
            [
                'username' => 'manager01',
                'full_name' => 'Mark Bautista',
                'role' => 'Manager',
            ],
            [
                'username' => 'staff01',
                'full_name' => 'Nicole Ramos',
                'role' => 'Staff',
            ],
        ];

        return view('users/index', [
            'title' => 'User Accounts',
            'users' => $users,
        ]);
    }
}