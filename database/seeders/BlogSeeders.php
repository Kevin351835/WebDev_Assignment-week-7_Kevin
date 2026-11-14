<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Seeder;

class BlogSeeders extends Seeder
{
    public function run(): void
    {
        $posts = [
            ['HTML',              'Kerangka dasar halaman web: teks, gambar, dan link.'],
            ['CSS & Tailwind',    'Mengatur tampilan web dengan cepat dan konsisten.'],
            ['JavaScript',        'Membuat website lebih interaktif, seperti menu buka-tutup.'],
            ['Laravel',           'Framework PHP berpola MVC yang rapi dan mudah dipakai.'],
            ['PHP',               'Bahasa sisi server yang menjadi dasar Laravel.'],
            ['MySQL',             'Database untuk menyimpan data dalam bentuk tabel.'],
            ['Git & GitHub',      'Mencatat perubahan kode dan menyimpannya secara online.'],
            ['Responsive Design', 'Tampilan web menyesuaikan ukuran layar apa pun.'],
            ['REST API',          'Cara aplikasi bertukar data lewat HTTP.'],
            ['Eloquent ORM',      'Mengakses database lewat model tanpa query SQL panjang.'],
        ];

        foreach ($posts as $i => [$judul, $isi]) {
            Blog::create([
                'urutan' => $i + 1,
                'judul'  => $judul,
                'isi'    => $isi,
            ]);
        }
    }
}