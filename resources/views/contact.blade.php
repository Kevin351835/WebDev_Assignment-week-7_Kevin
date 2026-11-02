@extends('layout.app')

@section('title', 'Contact | Kevin Stello')

@section('content')
<div class="site-main">
    <div class="container-narrow">
        <header class="page-header reveal">
            <h1 class="page-title">Contact <span class="gradient-text">Saya</span></h1>
            <p class="page-lead">
                Ayoo berkenalan
            </p>
        </header>

        <div class="contact-list">

            <a href="https://mail.google.com/mail/?view=cm&fs=1&to=Kevinstello54@gmail.com" target="_blank" rel="noopener noreferrer" class="group ref-card reveal">
                <div>
                    <p class="ref-label">Email</p>
                    <p class="ref-name">Kevinstello54@gmail.com</p>
                </div>
            </a>

            <a href="https://wa.me/6285240472250" target="_blank" rel="noopener noreferrer" class="group ref-card reveal" style="--delay: 100ms">
                <div>
                    <p class="ref-label">WhatsApp</p>
                    <p class="ref-name">0852 4047 2250</p>
                </div>
            </a>

            <a href="https://www.linkedin.com/in/kevin-liling-paseru-7a2901407/" target="_blank" rel="noopener noreferrer" class="group ref-card reveal" style="--delay: 200ms">
                <div>
                    <p class="ref-label">LinkedIn</p>
                    <p class="ref-name">linkedin.com/in/kevin-liling-paseru</p>
                </div>
            </a>

            <a href="https://github.com/Kevin351835" target="_blank" rel="noopener noreferrer" class="group ref-card reveal" style="--delay: 300ms">
                <div>
                    <p class="ref-label">GitHub</p>
                    <p class="ref-name">github.com/Kevin351835</p>
                </div>
            </a>

        </div>
    </div>
</div>
@endsection