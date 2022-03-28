<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
                'id' => 1,
                'nomor_hp' => '081234567891',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'role' => 'admin',
                'status' => 1,
                'created_at' => now(),
            ],
            [
                'id' => 2,
                'nomor_hp' => '081234567892',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'role' => 'bidan',
                'status' => 1,
                'created_at' => now(),
            ],
            [
                'id' => 3,
                'nomor_hp' => '081234567893',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'role' => 'bidan',
                'status' => 1,
                'created_at' => now(),
            ],
            [
                'id' => 4,
                'nomor_hp' => '081234567894',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'role' => 'penyuluh',
                'status' => 1,
                'created_at' => now(),
            ],
        ];

        DB::table('users')->insert($data);
    }
}
