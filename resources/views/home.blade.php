@extends('layout.app')

@section('title', 'Home | Kevin Stello')

@section('content')
<div class="site-main">

    <section class="hero">
        <div class="avatar reveal">K</div>

        <h1 class="hero-title reveal" style="--delay: 200ms">
            Hai, saya <span class="gradient-text">Kevin Stello</span>
        </h1>

        <p class="hero-role reveal" style="--delay: 300ms">
            <span id="typed">Mahasiswa UC Makassar</span><span class="caret"></span>
        </p>

        <p class="hero-text reveal" style="--delay: 400ms">
            Saya sedang belajar membangun sebuah website.
        </p>

        <div class="hero-actions reveal" style="--delay: 500ms">
            <a href="/blog" class="btn-primary">Baca Blog</a>
            <a href="/contact" class="btn-secondary">Hubungi Saya</a>
        </div>
    </section>

</div>
@endsection