<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index()
    {
        $customers = [
            [
                'full_name' => 'Michaella Balasta',
                'email' => 'michaellabalasta@gmail.com',
                'phone' => '+63 911-123-4567',
            ],
            [
                'full_name' => 'Jian Santos',
                'email' => 'jiansantos@gmail.com',
                'phone' => '+63 917-234-5678',
            ],
            [
                'full_name' => 'Carlo Tan',
                'email' => 'carlotan@gmail.com',
                'phone' => '+63 999-345-6789',
            ],
            [
                'full_name' => 'Angela Garcia',
                'email' => 'angelagarcia@gmail.com',
                'phone' => '+63 922-456-7890',
            ],
            [
                'full_name' => 'Miguel Mendoza',
                'email' => 'miguelmendoza@gmail.com',
                'phone' => '+63 925-567-8901',
            ],
            [
                'full_name' => 'Angel Lara',
                'email' => 'angellara@gmail.com',
                'phone' => '+63 938-678-9022',
            ],
            [
                'full_name' => 'Juniah Perez',
                'email' => 'niahperez@gmail.com',
                'phone' => '+63 988-618-9012',
            ],
            [
                'full_name' => 'Keith Dy',
                'email' => 'keithdy@gmail.com',
                'phone' => '+63 923-789-0123',
            ],
            [
                'full_name' => 'Bailey Cruz',
                'email' => 'baileycruz@gmail.com',
                'phone' => '+63 993-989-9923',
            ],
            [
                'full_name' => 'Bobby Lee',
                'email' => 'bobbylee@gmail.com',
                'phone' => '+63 923-789-9876',
            ],
            
        ];

        return view('customers/index', [
            'title' => 'Customer Accounts',
            'customers' => $customers,
        ]);
    }
}