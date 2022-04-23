<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BidanSeeder extends Seeder
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
                'user_id' => 2,
                'nik' => 1234567890123456,
                'nama_lengkap' => 'YUNI',
                'jenis_kelamin' => 'PEREMPUAN',
                'tempat_lahir' => 'SILAE',
                'tanggal_lahir' => '1996-01-01',
                'agama' => 'ISLAM',
                '7_angka_terakhir_str' => '1234567',
                'nomor_hp' => '08123456789',
                'email' => 'test@email.com',
                'alamat' => 'Jl. Mangga',
                'desa_kelurahan_id' => 7210120004,
                'kecamatan_id' => 7210120,
                'kabupaten_kota_id' => 7210,
                'provinsi_id' => 72,
                'foto_profil' => 'profil_default.png',
                'created_at' => now(),
            ],
            [
                'id' => 2,
                'user_id' => 3,
                'nik' => 6543211234567891,
                'nama_lengkap' => 'IIN',
                'jenis_kelamin' => 'PEREMPUAN',
                'tempat_lahir' => 'TONDO',
                'tanggal_lahir' => '1996-01-01',
                'agama' => 'ISLAM',
                '7_angka_terakhir_str' => '1234567',
                'nomor_hp' => '08123456789',
                'email' => 'test@email.com',
                'alamat' => 'Jl. Mangga',
                'desa_kelurahan_id' => 7210120004,
                'kecamatan_id' => 7210120,
                'kabupaten_kota_id' => 7210,
                'provinsi_id' => 72,
                'foto_profil' => 'profil_default.png',
                'created_at' => now(),
            ],
        ];
        DB::table('bidan')->insert($data);
    }
}
