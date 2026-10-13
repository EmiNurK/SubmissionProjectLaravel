<?php

namespace App\Http\Controllers;

class MahasiswaController extends Controller
{
    public function profil()
    {
        $mahasiswa = [
            'nama' => 'Emi Nur Khamidah',
            'nim' => '242520111',
            'jurusan' => 'Teknologi Informasi',
            'universitas' => 'Universitas Muhammadiyah Purworejo'
        ];

        return view('mahasiswa.profil', compact('mahasiswa'));
    }

    public function daftar()
    {
        $mahasiswa = [
        [    'nama' => 'Emi Nur Khamidah',
            'nim' => '242520111',
            'ipk' => 3.89
        ],
        [
            'nama' => 'Amrila',
            'nim' => '242520103',
            'ipk' => 3.90
        ],
        [
            'nama' => 'Hutami',
            'nim' => '232520119',
            'ipk' => 3.50
        ],
        [
            'nama' => 'Citra',
            'nim' => '232520123',
            'ipk' => 1.89
        ],
        [
            'nama' => 'Miftah',
            'nim' => '222420122',
            'ipk' => 2.70
        ]
        ];
        
        return view('mahasiswa.daftar', compact('mahasiswa'));
    }

    public function detail($nim)
{
    $mahasiswa = [
        [
            'nama' => 'Emi Nur Khamidah',
            'nim' => '242520111',
            'ipk' => 3.89
        ],
        [
            'nama' => 'Amrila',
            'nim' => '242520103',
            'ipk' => 3.90
        ],
        [
            'nama' => 'Hutami',
            'nim' => '232520119',
            'ipk' => 3.50
        ],
        [
            'nama' => 'Citra',
            'nim' => '232520123',
            'ipk' => 1.89
        ],
        [
            'nama' => 'Miftah',
            'nim' => '222420122',
            'ipk' => 2.70
        ]
    ];

    foreach ($mahasiswa as $m) {
        if ($m['nim'] == $nim) {
            return view('mahasiswa.detail', [
                'mahasiswa' => $m
            ]);
        }
    }

    abort(404);
}
}