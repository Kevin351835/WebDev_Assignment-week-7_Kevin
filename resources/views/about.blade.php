@extends('layout.app')

@section('title', 'About | Kevin Stello')

@section('content')
<div class="site-main">
    <div class="about-hero">
        <h1 class="about-title">Tentang <span class="gradient-text">Saya</span></h1>
        <p class="about-lead">
            Kenali lebih dekat latar belakang dan perjalanan akademik saya.
        </p>
    </div>

    <div class="about-grid">

        <div class="info-card p-8">
            <div class="border-b border-slate-800 pb-4 mb-6">
                <h2 class="info-title text-xl font-bold">Informasi Pribadi</h2>
            </div>

            <div class="space-y-4 text-sm md:text-base">
                <div class="flex justify-between items-center py-2 border-b border-slate-800/50">
                    <span class="text-slate-400 font-medium">Nama</span>
                    <span class="font-semibold text-slate-200">Kevin</span>
                </div>
                <div class="flex justify-between items-center py-2 border-b border-slate-800/50">
                    <span class="text-slate-400 font-medium">Domisili</span>
                    <span class="font-semibold text-slate-200">Makassar</span>
                </div>
                <div class="flex justify-between items-center py-2 border-b border-slate-800/50">
                    <span class="text-slate-400 font-medium">Angkatan</span>
                    <span class="rounded-full bg-blue-500/10 px-3 py-1 font-semibold text-blue-400 text-xs">2025</span>
                </div>
                <div class="flex justify-between items-center py-2">
                    <span class="text-slate-400 font-medium">Jurusan</span>
                    <span class="rounded-full bg-violet-500/10 px-3 py-1 font-semibold text-violet-400 text-xs">Informatika-AI</span>
                </div>
            </div>
        </div>

        <div class="info-card p-8">
            <div class="border-b border-slate-800 pb-4 mb-6">
                <h2 class="info-title text-xl font-bold">Pendidikan</h2>
            </div>

            <div class="space-y-6 text-sm md:text-base">
                <div class="relative pl-6 border-l-2 border-blue-500/40">
                    <span class="text-xs font-semibold uppercase tracking-wider text-blue-400">Sekolah Menengah Pertama</span>
                    <h3 class="mt-1 font-bold text-slate-200 text-base">SMP Negeri 1 Towuti</h3>
                </div>
                <div class="relative pl-6 border-l-2 border-violet-500/40">
                    <span class="text-xs font-semibold uppercase tracking-wider text-violet-400">Sekolah Menengah Atas</span>
                    <h3 class="mt-1 font-bold text-slate-200 text-base">SMA Katolik Makale</h3>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection