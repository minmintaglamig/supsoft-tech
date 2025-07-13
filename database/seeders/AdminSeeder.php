<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        if (!DB::table('users')->where('email', 'admin@admin.com')->exists()) {
            DB::table('users')->insert([
                'name' => 'Default Admin',
                'email' => 'admin@admin.com',
                'password' => Hash::make('admin123'),
                'role' => 'Admin',
                'email_verified_at' => now(), 
                'created_at' => now(),
                'updated_at' => now(),
            ]);
    }}
}
