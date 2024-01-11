<?php

namespace Database\Seeders;

use App\Enums\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        $users = [
            [
                'email' => 'admin@laundryapp.com',
                'password' => Hash::make('admin123'),
                'name' => 'Admin Laundry',
                'role' => Role::Admin->value,
            ],
            [
                'email' => 'hedrin@laundryapp.com',
                'password' => Hash::make('bambang123'),
                'name' => 'Admin laundry',
                'role' => Role::Admin->value,
            ]
            // Tambahkan lebih banyak pengguna di sini jika diperlukan
        ];
        foreach ($users as $userData) {
            $user = new User($userData);
            $user->save();
        }
    }
}
