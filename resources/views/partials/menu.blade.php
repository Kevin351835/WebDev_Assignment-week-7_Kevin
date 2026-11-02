<body class="page-body">
    <div class="aurora" aria-hidden="true"></div>

    @include('partials.navbar')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

    @yield('script')
</body>