<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BeasiswaSeeder extends Seeder
{
    public function run()
    {
        DB::table('beasiswa')->insert([
            [
                'nama' => 'robert onsu',
                'jenis' => 'full',
                'nominal' => 5000000.00,
                'deskripsi' => 'Beasiswa penuh untuk program studi Teknik Informatika.',
                'tanggal_calon_beasiswa_daftar' => '2024-01-01',
                // 'tanggal_akhir_pendaftaran' => '2024-01-31',
                'jurusan' => 'Teknik-Informatika',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'john doe',
                'jenis' => 'parsial',
                'nominal' => 3000000.00,
                'deskripsi' => 'Beasiswa parsial untuk program studi Teknik Sipil.',
                'tanggal_calon_beasiswa_daftar' => '2024-02-01',
                // 'tanggal_akhir_pendaftaran' => '2024-02-28',
                'jurusan' => 'Teknik-Sipil',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'jonathan doe',
                'jenis' => 'lainnya',
                'nominal' => 2000000.00,
                'deskripsi' => 'Beasiswa untuk program studi Teknik Mesin.',
                'tanggal_calon_beasiswa_daftar' => '2024-03-01',
                // 'tanggal_akhir_pendaftaran' => '2024-03-31',
                'jurusan' => 'Teknik-Mesin',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'smith doe',
                'jenis' => 'full',
                'nominal' => 5000000.00,
                'deskripsi' => 'Beasiswa penuh untuk program studi Teknik Elektro.',
                'tanggal_calon_beasiswa_daftar' => '2024-04-01',
                // 'tanggal_akhir_pendaftaran' => '2024-04-30',
                'jurusan' => 'Teknik-Elektro',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'alex doe',
                'jenis' => 'parsial',
                'nominal' => 4000000.00,
                'deskripsi' => 'Beasiswa parsial untuk program studi Teknik Kimia.',
                'tanggal_calon_beasiswa_daftar' => '2024-05-01',
                // 'tanggal_akhir_pendaftaran' => '2024-05-31',
                'jurusan' => 'Teknik-Kimia',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
