<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $users = [
            [
                'username' => 'francine01',
                'full_name' => 'Francine Agalabia',
                'role' => 'CEO',
            ],
            [
                'username' => 'mercy01',
                'full_name' => 'Mercy Dela Cruz',
                'role' => 'Manager',
            ],
            [
                'username' => 'anna01',
                'full_name' => 'Anna Flores',
                'role' => 'Assistant Manager',
            ],
            [
                'username' => 'bea01',
                'full_name' => 'Bea Maxine',
                'role' => 'Secretary ',
            ],
            [
                'username' => 'noc01',
                'full_name' => 'Nicole Ramos',
                'role' => 'Cashier',
            ],
            [
                'username' => 'chloe01',
                'full_name' => 'Chloe Marie',
                'role' => 'Agent',
            ],
            [
                'username' => 'cashier01',
                'full_name' => 'John Villanueva',
                'role' => 'Help Desk',
            ],
            [
                'username' => 'jaz01',
                'full_name' => 'Jazmine Elly',
                'role' => 'Staff',
            ],
            [
                'username' => 'manager01',
                'full_name' => 'Mark Bautista',
                'role' => 'Staff',
            ],
            [
                'username' => 'staff01',
                'full_name' => 'Violet Garcia',
                'role' => 'Staff',
            ],
        ];

        return view('users/index', [
            'title' => 'User Accounts',
            'users' => $users,
        ]);
    }
}