<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    public function run(): void
    {
        $mahasiswa = [
            'nim' => '82648258',
            'nama' => 'Syahril Sobirin',
            'prodi' => 'Sistem Informasi',
            'kampus' => 'Universitas Pamulang',
            'email' => 'syahril@gmail.com',
            'status' => 'Aktif',
        ];

        Mahasiswa::create($mahasiswa);
    }
}
