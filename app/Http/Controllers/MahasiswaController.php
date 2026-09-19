<?php

namespace App\Http\Controllers;

class MahasiswaController extends Controller
{
    //
    public function index()
    {
        $mahasiswa = [
            'nim' => '251011700310',
            'nama' => 'Adam Burhanudin Lubis',
            'prodi' => 'Sistem Informasi',
            'kampus' => 'Universitas Pamulang',
            'email' => 'adamburhan4@gmail.com',
            'status' => 'aktif',
        ];

        return view('mahasiswa', compact('mahasiswa'));
    }
}