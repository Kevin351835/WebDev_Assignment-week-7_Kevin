@extends('layout.app')

@section('title', 'Blog | Kevin Stello')

@section('content')
<div class="site-main">
    <div class="container-narrow">
        <header class="page-header">
            <p class="eyebrow">Teknologi Web</p>
            <h1 class="page-title">Penjelasan <span class="gradient-text">Pengembangan Web</span></h1>
        </header>

        <div class="post-list">

            <article class="post">
                <div class="post-head">
                    <span class="post-number">1</span>
                    <h2 class="post-heading">HTML</h2>
                </div>
                <p class="post-text">
                    HyperText Markup Language (HTML) adalah fondasi dari setiap halaman web. HTML berfungsi untuk menstrukturkan konten, seperti teks, heading, paragraf, gambar, serta tautan agar dapat dibaca dan ditampilkan dengan baik oleh peramban web.
                </p>
            </article>

            <article class="post">
                <div class="post-head">
                    <span class="post-number">2</span>
                    <h2 class="post-heading">CSS &amp; Tailwind CSS</h2>
                </div>
                <p class="post-text">
                    Cascading Style Sheets (CSS) digunakan untuk mendesain dan mempercantik tampilan halaman web. Dalam proyek ini, digunakan <strong>Tailwind CSS</strong>, sebuah kerangka kerja CSS berbasis utilitas (utility-first) yang memungkinkan pembangunan antarmuka modern dengan cepat, konsisten, dan sangat responsif.
                </p>
            </article>

            <article class="post">
                <div class="post-head">
                    <span class="post-number">3</span>
                    <h2 class="post-heading">JavaScript</h2>
                </div>
                <p class="post-text">
                    JavaScript adalah bahasa pemrograman yang memberikan interaktivitas pada website. Pada proyek ini, JavaScript digunakan untuk mengontrol fungsi navigasi responsif (menu <i>collapse</i>/buka-tutup) dan meningkatkan pengalaman pengguna secara keseluruhan.
                </p>
            </article>

            <article class="post">
                <div class="post-head">
                    <span class="post-number">4</span>
                    <h2 class="post-heading">Laravel</h2>
                </div>
                <p class="post-text">
                    Laravel adalah kerangka kerja (framework) PHP berbasis MVC (Model-View-Controller) yang elegan dan ekspresif. Laravel mempermudah pengelolaan routing, struktur direktori, sistem template Blade, serta integrasi aset melalui Vite dalam membangun aplikasi web yang handal dan aman.
                </p>
            </article>

        </div>
    </div>
</div>
@endsection