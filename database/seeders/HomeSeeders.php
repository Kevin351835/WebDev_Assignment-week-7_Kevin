<?php

namespace Database\Seeders;

use App\Models\Home;
use Illuminate\Database\Seeder;

class HomeSeeders extends Seeder
{
    public function run(): void
    {
        $data = [
            ['Mahasiswa UC Makassar',    'Lagi belajar bikin website.'],
            ['Web Developer Pemula',     'Masih sering error, tapi terus belajar.'],
            ['Laravel Learner',          'Baru kenalan sama Laravel.'],
            ['Mahasiswa Informatika-AI', 'Penasaran sama dunia AI.'],
            ['Frontend Enthusiast',      'Suka ngatur tampilan biar rapi.'],
            ['Backend Explorer',         'Belajar cara kerja database.'],
            ['Problem Solver',           'Senang mencari sumber bug.'],
            ['Tech Enthusiast',          'Suka ikuti teknologi baru.'],
            ['Fast Learner',             'Tiap minggu belajar hal baru.'],
            ['Future Software Engineer', 'Masih berproses, satu proyek per satu.'],
        ];

        foreach ($data as [$peran, $deskripsi]) {
            Home::create([
                'nama'      => 'Kevin Stello',
                'peran'     => $peran,
                'deskripsi' => $deskripsi,
            ]);
        }
    }
}