<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class SuperAdminSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'superadmin@example.com'], // Cek jika user sudah ada
            [
                'name' => 'Super Admin',
                'password' => Hash::make('password123'), // Ganti dengan password yang aman
                'role' => 'admin', // Pastikan kolom 'role' ada di tabel users
            ]
        );
    }
}
