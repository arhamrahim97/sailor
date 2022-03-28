<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
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
                'user_id' => 1,
                'nik' => 1234567890123456,
                'nama_lengkap' => 'Admin 1',
                'jenis_kelamin' => 'PEREMPUAN',
                'tempat_lahir' => 'SILAE',
                'tanggal_lahir' => '1996-01-01',
                'agama' => 'ISLAM',
                'nomor_hp' => '08123456789',
                'email' => 'test@email.com',
                'alamat' => 'Jl. Mangga',
                'desa_kelurahan_id' => 7271031006,
                'kecamatan_id' => 7271031,
                'kabupaten_kota_id' => 7271,
                'provinsi_id' => 72,
                'foto_profil' => 'profil_default.png',
                'created_at' => now(),
            ],
        ];
        DB::table('admin')->insert($data);
    }
}
