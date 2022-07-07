<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'admin',
                'username' => 'iniadmin',
                'password' => Hash::make('Admin'),
                'role' => 'Admin',
            ],
            [
                'name' => 'Miko Dwi Oktafian',
                'username' => 'miko30',
                'password' => Hash::make('miko23231'),
                'role' => 'Manager',
            ],
            [
                'name' => 'Udin',
                'username' => 'udin',
                'password' => Hash::make('udin'),
                'role' => 'Kasir',
            ]
        ];
        User::insert($data);
    }
}
