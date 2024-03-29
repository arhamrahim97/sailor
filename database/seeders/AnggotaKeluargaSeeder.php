<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnggotaKeluargaSeeder extends Seeder
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
                'id' => '674085d6-c4a3-11ec-9d64-0242ac120002', //1
                'bidan_id' => '9b6120ac-c4a1-11ec-9d64-0242ac120002',
                'kartu_keluarga_id' => 'de2a4fde-c4a2-11ec-9d64-0242ac120002',
                'user_id' => '5gf9ba91-4778-404c-aa7f-5fd327e87e90',
                'nama_lengkap' => 'KEVIN',
                'nik' => 1234567890123441,
                'jenis_kelamin' => 'LAKI-LAKI',
                'tempat_lahir' => 'TONDO',
                'tanggal_lahir' => '1996-01-01',
                'agama_id' => 1,
                'pendidikan_id' => 8,
                'jenis_pekerjaan_id' => 88,
                'golongan_darah_id' => 1,
                'status_perkawinan_id' => 3,
                'tanggal_perkawinan' => '2019-01-28',
                'status_hubungan_dalam_keluarga_id' => 1,
                'kewarganegaraan' => 'WNI',
                'no_paspor' => '-',
                'no_kitap' => '-',
                'nama_ayah' => 'ILHAM',
                'nama_ibu' => 'MUJI',
                'foto_profil' => NULL,
                'is_valid' => 1,
                'tanggal_validasi' => '2022-04-26',
                'created_at' => now(),
            ],
            [
                'id' => '674085d6-c4a3-11ec-9d64-0242ac120003', //2
                'bidan_id' => '9b6120ac-c4a1-11ec-9d64-0242ac120002',
                'kartu_keluarga_id' => 'de2a4fde-c4a2-11ec-9d64-0242ac120002',
                'user_id' => null,
                'nama_lengkap' => 'RIA',
                'nik' => 7206091803080002,
                'jenis_kelamin' => 'PEREMPUAN',
                'tempat_lahir' => 'TONDO',
                'tanggal_lahir' => '1996-01-01',
                'agama_id' => 1,
                'pendidikan_id' => 8,
                'jenis_pekerjaan_id' => 88,
                'golongan_darah_id' => 1,
                'status_perkawinan_id' => 3,
                'tanggal_perkawinan' => '2019-01-28',
                'status_hubungan_dalam_keluarga_id' => 3,
                'kewarganegaraan' => 'WNI',
                'no_paspor' => '-',
                'no_kitap' => '-',
                'nama_ayah' => 'ILHAM',
                'nama_ibu' => 'MUJI',
                'foto_profil' => NULL,
                'is_valid' => 1,
                'tanggal_validasi' => '2022-04-26',
                'created_at' => now(),
            ],
            [
                'id' => '674085d6-c4a3-11ec-9d64-0242ac120044', //3
                'bidan_id' => '9b6120ac-c4a1-11ec-9d64-0242ac120002',
                'kartu_keluarga_id' => 'de2a4fde-c4a2-11ec-9d64-0242ac120002',
                'user_id' => '5gf9ba91-4778-404c-aa7f-5fd327e87e94',
                'nama_lengkap' => 'MAIL',
                'nik' => 1234567890123445,
                'jenis_kelamin' => 'LAKI-LAKI',
                'tempat_lahir' => 'SILAE',
                'tanggal_lahir' => '2007-01-23',
                'agama_id' => 1,
                'pendidikan_id' => 5,
                'jenis_pekerjaan_id' => 3,
                'golongan_darah_id' => 1,
                'status_perkawinan_id' => 1,
                'tanggal_perkawinan' => NULL,
                'status_hubungan_dalam_keluarga_id' => 4,
                'kewarganegaraan' => 'WNI',
                'no_paspor' => '-',
                'no_kitap' => '-',
                'nama_ayah' => 'KEVIN',
                'nama_ibu' => 'RIA',
                'foto_profil' => NULL,
                'is_valid' => 1,
                'tanggal_validasi' => '2022-04-26',
                'created_at' => now(),
            ],
            [
                'id' => '674085d6-c4a3-11ec-9d64-0242ac120011', //8.1 //remaja
                'bidan_id' => '9b6120ac-c4a1-11ec-9d64-0242ac120003',
                'kartu_keluarga_id' => 'de2a4fde-c4a2-11ec-9d64-0242ac120002',
                'user_id' => null,
                'nama_lengkap' => 'BENI',
                'nik' => 1234567890123115,
                'jenis_kelamin' => 'LAKI-LAKI',
                'tempat_lahir' => 'SILAE',
                'tanggal_lahir' => '2009-04-23',
                'agama_id' => 1,
                'pendidikan_id' => 5,
                'jenis_pekerjaan_id' => 3,
                'golongan_darah_id' => 1,
                'status_perkawinan_id' => 1,
                'tanggal_perkawinan' => NULL,
                'status_hubungan_dalam_keluarga_id' => 4,
                'kewarganegaraan' => 'WNI',
                'no_paspor' => '-',
                'no_kitap' => '-',
                'nama_ayah' => 'KEVIN',
                'nama_ibu' => 'RIA',
                'foto_profil' => NULL,
                'is_valid' => 1,
                'tanggal_validasi' => '2022-04-26',
                'created_at' => now(),
            ],
            [
                'id' => '674085d6-c4a3-11ec-9d64-0242ac120012', //8.1 //remaja
                'bidan_id' => '9b6120ac-c4a1-11ec-9d64-0242ac120003',
                'kartu_keluarga_id' => 'de2a4fde-c4a2-11ec-9d64-0242ac120002',
                'user_id' => null,
                'nama_lengkap' => 'YANTO',
                'nik' => 1234567890123116,
                'jenis_kelamin' => 'LAKI-LAKI',
                'tempat_lahir' => 'SILAE',
                'tanggal_lahir' => '2008-04-23',
                'agama_id' => 1,
                'pendidikan_id' => 5,
                'jenis_pekerjaan_id' => 3,
                'golongan_darah_id' => 1,
                'status_perkawinan_id' => 1,
                'tanggal_perkawinan' => NULL,
                'status_hubungan_dalam_keluarga_id' => 4,
                'kewarganegaraan' => 'WNI',
                'no_paspor' => '-',
                'no_kitap' => '-',
                'nama_ayah' => 'KEVIN',
                'nama_ibu' => 'RIA',
                'foto_profil' => NULL,
                'is_valid' => 1,
                'tanggal_validasi' => '2022-04-26',
                'created_at' => now(),
            ],
            [
                'id' => '674085d6-c4a3-11ec-9d64-0242ac120045', //3.1
                'bidan_id' => null,
                'kartu_keluarga_id' => 'de2a4fde-c4a2-11ec-9d64-0242ac120002',
                'user_id' => null,
                'nama_lengkap' => 'MEI',
                'nik' => 1234567890123446,
                'jenis_kelamin' => 'PEREMPUAN',
                'tempat_lahir' => 'SILAE',
                'tanggal_lahir' => '2015-01-23',
                'agama_id' => 1,
                'pendidikan_id' => 1,
                'jenis_pekerjaan_id' => 1,
                'golongan_darah_id' => 1,
                'status_perkawinan_id' => 1,
                'tanggal_perkawinan' => NULL,
                'status_hubungan_dalam_keluarga_id' => 4,
                'kewarganegaraan' => 'WNI',
                'no_paspor' => '-',
                'no_kitap' => '-',
                'nama_ayah' => 'KEVIN',
                'nama_ibu' => 'RIA',
                'foto_profil' => NULL,
                'is_valid' => 0,
                'tanggal_validasi' => NULL,
                'created_at' => now(),
            ],
            [
                'id' => '674085d6-c4a3-11ec-9d64-0242ac120004', //3
                'bidan_id' => null,
                'kartu_keluarga_id' => 'de2a4fde-c4a2-11ec-9d64-0242ac120002',
                'user_id' => null,
                'nama_lengkap' => 'LIDYA',
                'nik' => 7206091803080003,
                'jenis_kelamin' => 'PEREMPUAN',
                'tempat_lahir' => 'SILAE',
                'tanggal_lahir' => '2018-01-23',
                'agama_id' => 1,
                'pendidikan_id' => 1,
                'jenis_pekerjaan_id' => 1,
                'golongan_darah_id' => 1,
                'status_perkawinan_id' => 1,
                'tanggal_perkawinan' => NULL,
                'status_hubungan_dalam_keluarga_id' => 4,
                'kewarganegaraan' => 'WNI',
                'no_paspor' => '-',
                'no_kitap' => '-',
                'nama_ayah' => 'KEVIN',
                'nama_ibu' => 'RIA',
                'foto_profil' => NULL,
                'is_valid' => 0,
                'tanggal_validasi' => NULL,
                'created_at' => now(),
            ],
            [
                'id' => '674085d6-c4a3-11ec-9d64-0242ac120005', //4
                'bidan_id' => '9b6120ac-c4a1-11ec-9d64-0242ac120002',
                'kartu_keluarga_id' => 'de2a4fde-c4a2-11ec-9d64-0242ac120002',
                'user_id' => null,
                'nama_lengkap' => 'AINI',
                'nik' => 7206091803080004,
                'jenis_kelamin' => 'PEREMPUAN',
                'tempat_lahir' => 'SILAE',
                'tanggal_lahir' => '2019-07-20',
                'agama_id' => 1,
                'pendidikan_id' => 1,
                'jenis_pekerjaan_id' => 1,
                'golongan_darah_id' => 1,
                'status_perkawinan_id' => 1,
                'tanggal_perkawinan' => NULL,
                'status_hubungan_dalam_keluarga_id' => 4,
                'kewarganegaraan' => 'WNI',
                'no_paspor' => '-',
                'no_kitap' => '-',
                'nama_ayah' => 'KEVIN',
                'nama_ibu' => 'RIA',
                'foto_profil' => NULL,
                'is_valid' => 1,
                'tanggal_validasi' => '2022-04-26',
                'created_at' => now(),
            ],
            [
                'id' => '674085d6-c4a3-11ec-9d64-0242ac120006', //5
                'bidan_id' => '9b6120ac-c4a1-11ec-9d64-0242ac120002',
                'kartu_keluarga_id' => 'de2a4fde-c4a2-11ec-9d64-0242ac120002',
                'user_id' => null,
                'nama_lengkap' => 'VIDIA',
                'nik' => 7206091803080005,
                'jenis_kelamin' => 'PEREMPUAN',
                'tempat_lahir' => 'SILAE',
                'tanggal_lahir' => '2020-09-01',
                'agama_id' => 1,
                'pendidikan_id' => 1,
                'jenis_pekerjaan_id' => 1,
                'golongan_darah_id' => 1,
                'status_perkawinan_id' => 1,
                'tanggal_perkawinan' => NULL,
                'status_hubungan_dalam_keluarga_id' => 4,
                'kewarganegaraan' => 'WNI',
                'no_paspor' => '-',
                'no_kitap' => '-',
                'nama_ayah' => 'KEVIN',
                'nama_ibu' => 'RIA',
                'foto_profil' => NULL,
                'is_valid' => 1,
                'tanggal_validasi' => '2022-04-26',
                'created_at' => now(),
            ],
            [
                'id' => '674085d6-c4a3-11ec-9d64-0242ac120007', //6
                'bidan_id' => '9b6120ac-c4a1-11ec-9d64-0242ac120002',
                'kartu_keluarga_id' => 'de2a4fde-c4a2-11ec-9d64-0242ac120002',
                'user_id' => null,
                'nama_lengkap' => 'FARA',
                'nik' => 7206091803080006,
                'jenis_kelamin' => 'PEREMPUAN',
                'tempat_lahir' => 'SILAE',
                'tanggal_lahir' => '2021-10-10',
                'agama_id' => 1,
                'pendidikan_id' => 1,
                'jenis_pekerjaan_id' => 1,
                'golongan_darah_id' => 1,
                'status_perkawinan_id' => 1,
                'tanggal_perkawinan' => NULL,
                'status_hubungan_dalam_keluarga_id' => 4,
                'kewarganegaraan' => 'WNI',
                'no_paspor' => '-',
                'no_kitap' => '-',
                'nama_ayah' => 'KEVIN',
                'nama_ibu' => 'RIA',
                'foto_profil' => NULL,
                'is_valid' => 1,
                'tanggal_validasi' => '2022-04-26',
                'created_at' => now(),
            ],

            // Kartu Keluarga 2
            [
                'id' => '674085d6-c4a3-11ec-9d64-0242ac120008', //7
                'bidan_id' => '9b6120ac-c4a1-11ec-9d64-0242ac120003',
                'kartu_keluarga_id' => 'de2a4fde-c4a2-11ec-9d64-0242ac120003',
                'user_id' => '5gf9ba91-4778-404c-aa7f-5fd327e87e91',
                'nama_lengkap' => 'RANGGA',
                'nik' => 1234567890123442,
                'jenis_kelamin' => 'LAKI-LAKI',
                'tempat_lahir' => 'NUNU',
                'tanggal_lahir' => '1993-01-01',
                'agama_id' => 1,
                'pendidikan_id' => 8,
                'jenis_pekerjaan_id' => 15,
                'golongan_darah_id' => 5,
                'status_perkawinan_id' => 3,
                'tanggal_perkawinan' => '2018-02-22',
                'status_hubungan_dalam_keluarga_id' => 1,
                'kewarganegaraan' => 'WNI',
                'no_paspor' => '-',
                'no_kitap' => '-',
                'nama_ayah' => 'RUDI',
                'nama_ibu' => 'MAYA',
                'foto_profil' => NULL,
                'is_valid' => 1,
                'tanggal_validasi' => '2022-04-26',
                'created_at' => now(),
            ],
            [
                'id' => '674085d6-c4a3-11ec-9d64-0242ac120009', //8
                'bidan_id' => '9b6120ac-c4a1-11ec-9d64-0242ac120003',
                'kartu_keluarga_id' => 'de2a4fde-c4a2-11ec-9d64-0242ac120003',
                'user_id' => null,
                'nama_lengkap' => 'LINDA',
                'nik' => 8902983209990002,
                'jenis_kelamin' => 'PEREMPUAN',
                'tempat_lahir' => 'NUNU',
                'tanggal_lahir' => '1993-01-01',
                'agama_id' => 1,
                'pendidikan_id' => 8,
                'jenis_pekerjaan_id' => 15,
                'golongan_darah_id' => 5,
                'status_perkawinan_id' => 3,
                'tanggal_perkawinan' => '2018-02-22',
                'status_hubungan_dalam_keluarga_id' => 3,
                'kewarganegaraan' => 'WNI',
                'no_paspor' => '-',
                'no_kitap' => '-',
                'nama_ayah' => 'RUDI',
                'nama_ibu' => 'MAYA',
                'foto_profil' => NULL,
                'is_valid' => 1,
                'tanggal_validasi' => '2022-04-26',
                'created_at' => now(),
            ],

            [
                'id' => '674085d6-c4a3-11ec-9d64-0242ac12000a', //9
                'bidan_id' => '9b6120ac-c4a1-11ec-9d64-0242ac120003',
                'kartu_keluarga_id' => 'de2a4fde-c4a2-11ec-9d64-0242ac120003',
                'user_id' => null,
                'nama_lengkap' => 'NANA',
                'nik' => 8902983209990003,
                'jenis_kelamin' => 'PEREMPUAN',
                'tempat_lahir' => 'PETOBO',
                'tanggal_lahir' => '2016-01-25',
                'agama_id' => 1,
                'pendidikan_id' => 1,
                'jenis_pekerjaan_id' => 1,
                'golongan_darah_id' => 5,
                'status_perkawinan_id' => 1,
                'tanggal_perkawinan' => NULL,
                'status_hubungan_dalam_keluarga_id' => 4,
                'kewarganegaraan' => 'WNI',
                'no_paspor' => '-',
                'no_kitap' => '-',
                'nama_ayah' => 'RANGGA',
                'nama_ibu' => 'LINDA',
                'foto_profil' => NULL,
                'is_valid' => 1,
                'tanggal_validasi' => '2022-04-26',
                'created_at' => now(),
            ],
            [
                'id' => '674085d6-c4a3-11ec-9d64-0242ac12000b', //10
                'bidan_id' => null,
                'kartu_keluarga_id' => 'de2a4fde-c4a2-11ec-9d64-0242ac120003',
                'user_id' => null,
                'nama_lengkap' => 'HARITH',
                'nik' => 8902983209990004,
                'jenis_kelamin' => 'LAKI-LAKI',
                'tempat_lahir' => 'MAMBORO',
                'tanggal_lahir' => '2017-10-30',
                'agama_id' => 1,
                'pendidikan_id' => 1,
                'jenis_pekerjaan_id' => 1,
                'golongan_darah_id' => 1,
                'status_perkawinan_id' => 1,
                'tanggal_perkawinan' => NULL,
                'status_hubungan_dalam_keluarga_id' => 4,
                'kewarganegaraan' => 'WNI',
                'no_paspor' => '-',
                'no_kitap' => '-',
                'nama_ayah' => 'RANGGA',
                'nama_ibu' => 'LINDA',
                'foto_profil' => NULL,
                'is_valid' => 0,
                'tanggal_validasi' => NULL,
                'created_at' => now(),
            ],
            [
                'id' => '674085d6-c4a3-11ec-9d64-0242ac12000c', //11
                'bidan_id' => null,
                'kartu_keluarga_id' => 'de2a4fde-c4a2-11ec-9d64-0242ac120003',
                'user_id' => null,
                'nama_lengkap' => 'FIKI',
                'nik' => 8902983209990005,
                'jenis_kelamin' => 'LAKI-LAKI',
                'tempat_lahir' => 'MAMBORO',
                'tanggal_lahir' => '2018-01-10',
                'agama_id' => 1,
                'pendidikan_id' => 1,
                'jenis_pekerjaan_id' => 1,
                'golongan_darah_id' => 1,
                'status_perkawinan_id' => 1,
                'tanggal_perkawinan' => NULL,
                'status_hubungan_dalam_keluarga_id' => 4,
                'kewarganegaraan' => 'WNI',
                'no_paspor' => '-',
                'no_kitap' => '-',
                'nama_ayah' => 'RANGGA',
                'nama_ibu' => 'LINDA',
                'foto_profil' => NULL,
                'is_valid' => 0,
                'tanggal_validasi' => NULL,
                'created_at' => now(),
            ],
            [
                'id' => '674085d6-c4a3-11ec-9d64-0242ac12000d', //12
                'bidan_id' => '9b6120ac-c4a1-11ec-9d64-0242ac120003',
                'kartu_keluarga_id' => 'de2a4fde-c4a2-11ec-9d64-0242ac120003',
                'user_id' => null,
                'nama_lengkap' => 'RISKI',
                'nik' => 8902983209990006,
                'jenis_kelamin' => 'LAKI-LAKI',
                'tempat_lahir' => 'MAMBORO',
                'tanggal_lahir' => '2019-03-11',
                'agama_id' => 1,
                'pendidikan_id' => 1,
                'jenis_pekerjaan_id' => 1,
                'golongan_darah_id' => 1,
                'status_perkawinan_id' => 1,
                'tanggal_perkawinan' => NULL,
                'status_hubungan_dalam_keluarga_id' => 4,
                'kewarganegaraan' => 'WNI',
                'no_paspor' => '-',
                'no_kitap' => '-',
                'nama_ayah' => 'RANGGA',
                'nama_ibu' => 'LINDA',
                'foto_profil' => NULL,
                'is_valid' => 1,
                'tanggal_validasi' => '2022-04-26',
                'created_at' => now(),
            ],
            [
                'id' => '674085d6-c4a3-11ec-9d64-0242ac12000e', //13
                'bidan_id' => '9b6120ac-c4a1-11ec-9d64-0242ac120003',
                'kartu_keluarga_id' => 'de2a4fde-c4a2-11ec-9d64-0242ac120003',
                'user_id' => null,
                'nama_lengkap' => 'FATIN',
                'nik' => 8902983209990007,
                'jenis_kelamin' => 'LAKI-LAKI',
                'tempat_lahir' => 'MAMBORO',
                'tanggal_lahir' => '2020-04-03',
                'agama_id' => 1,
                'pendidikan_id' => 1,
                'jenis_pekerjaan_id' => 1,
                'golongan_darah_id' => 1,
                'status_perkawinan_id' => 1,
                'tanggal_perkawinan' => NULL,
                'status_hubungan_dalam_keluarga_id' => 4,
                'kewarganegaraan' => 'WNI',
                'no_paspor' => '-',
                'no_kitap' => '-',
                'nama_ayah' => 'RANGGA',
                'nama_ibu' => 'LINDA',
                'foto_profil' => NULL,
                'is_valid' => 1,
                'tanggal_validasi' => '2022-04-26',
                'created_at' => now(),
            ],
            [
                'id' => '674085d6-c4a3-11ec-9d64-0242ac12000f', //14
                'bidan_id' => null,
                'kartu_keluarga_id' => 'de2a4fde-c4a2-11ec-9d64-0242ac120004',
                'user_id' => '5gf9ba91-4778-404c-aa7f-5fd327e87e92',
                'nama_lengkap' => 'AHMAD',
                'nik' => 1234567890123443,
                'jenis_kelamin' => 'LAKI-LAKI',
                'tempat_lahir' => 'MAMBORO',
                'tanggal_lahir' => '2020-04-03',
                'agama_id' => 1,
                'pendidikan_id' => 1,
                'jenis_pekerjaan_id' => 1,
                'golongan_darah_id' => 1,
                'status_perkawinan_id' => 1,
                'tanggal_perkawinan' => NULL,
                'status_hubungan_dalam_keluarga_id' => 1,
                'kewarganegaraan' => 'WNI',
                'no_paspor' => '-',
                'no_kitap' => '-',
                'nama_ayah' => 'RANGGA',
                'nama_ibu' => 'LINDA',
                'foto_profil' => NULL,
                'is_valid' => 0,
                'tanggal_validasi' => NULL,
                'created_at' => now(),
            ],

        ];
        DB::table('anggota_keluarga')->insert($data);
    }
}
