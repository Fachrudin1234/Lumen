<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
Use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Mengenkripsi password menggunakan bcrypt
        $password = bcrypt('amira');

        // Membuat data user awal
        $user = [
            'name' => 'Amira',
            'email' => 'amira@user',
            'password' => $password,
        //    'notelp' => '0898123456',
        //    'alamat' => "Jl. Raya"
        ];

        // Menyimpan data user ke database
        User::create($user);
    }
}
