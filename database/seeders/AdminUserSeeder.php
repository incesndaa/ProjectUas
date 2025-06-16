<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        \App\Models\User::create([
            'name' => 'Admin',
            'email' => 'admin@kampus.ac.id',
            'password' => bcrypt('admin123'), // Ganti dengan password yang aman
            'is_admin' => true,
        ]);
    }
}
