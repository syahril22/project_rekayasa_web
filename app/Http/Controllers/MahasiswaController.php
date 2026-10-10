<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    //
    public function index()
    {
        // $mahasiswa = [
        //     'nim' => '251011700247',
        //     'nama' => 'Syahril Sobirin',
        //     'prodi' => 'Sistem Informasi',
        //     'kampus' => 'Universitas Pamulang',
        //     'email' => 'syahril@gmail.com',
        //     'status' => 'aktif',
        // ];

        $mahasiswa = Mahasiswa::first();

        return view('page.profile', compact('mahasiswa'));
    }
}
