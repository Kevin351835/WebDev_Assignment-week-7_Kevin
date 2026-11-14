<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Seeder;

class AboutSeeders extends Seeder
{
    public function run(): void
    {
        $data = [
            ['Kevin',  'Makassar', '2025', 'Informatika-AI',   'SMPN 1 Towuti',     'SMA Katolik Makale'],
            ['Andi',   'Makassar', '2025', 'Informatika-AI',   'SMPN 6 Makassar',   'SMAN 5 Makassar'],
            ['Budi',   'Gowa',     '2025', 'Informatika',      'SMPN 1 Gowa',       'SMAN 1 Gowa'],
            ['Citra',  'Maros',    '2025', 'Sistem Informasi', 'SMPN 1 Maros',      'SMAN 1 Maros'],
            ['Dewi',   'Makassar', '2024', 'Informatika-AI',   'SMP Rajawali',      'SMA Rajawali'],
            ['Eko',    'Takalar',  '2024', 'Informatika',      'SMPN 1 Takalar',    'SMAN 1 Takalar'],
            ['Fani',   'Makassar', '2024', 'Sistem Informasi', 'SMPN 12 Makassar',  'SMAN 9 Makassar'],
            ['Gita',   'Toraja',   '2023', 'Informatika-AI',   'SMPN 1 Makale',     'SMAN 1 Makale'],
            ['Hendra', 'Palopo',   '2023', 'Informatika',      'SMPN 3 Palopo',     'SMAN 1 Palopo'],
            ['Indah',  'Makassar', '2023', 'Sistem Informasi', 'SMPN 4 Makassar',   'SMAN 3 Makassar'],
        ];

        foreach ($data as [$nama, $domisili, $angkatan, $jurusan, $smp, $sma]) {
            About::create(compact('nama', 'domisili', 'angkatan', 'jurusan', 'smp', 'sma'));
        }
    }
}