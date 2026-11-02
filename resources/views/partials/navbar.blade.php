<header class="site-header" translate="no">
    <nav class="site-nav" aria-label="Main navigation">
        <a href="/" class="site-brand"></a>

        <div id="overlay" class="overlay"></div>

        <div id="collapseMenu" tabindex="-1" class="menu">
            <button type="button" id="toggleClose" class="menu-close" aria-label="Tutup menu">&times;</button>
            <ul class="menu-list">
                <li><a href="/" class="nav-link {{ request()->is('/') ? 'nav-link-active' : '' }}">home</a></li>
                <li><a href="/about" class="nav-link {{ request()->is('about') ? 'nav-link-active' : '' }}">about</a></li>
                <li><a href="/blog" class="nav-link {{ request()->is('blog') ? 'nav-link-active' : '' }}">blog</a></li>
                <li><a href="/contact" class="nav-link {{ request()->is('contact') ? 'nav-link-active' : '' }}">contact</a></li>
            </ul>
        </div>

        <button type="button" id="toggleOpen" class="menu-toggle"
                aria-controls="collapseMenu" aria-expanded="false" aria-label="Buka menu">
            <svg class="menu-toggle-icon" aria-hidden="true" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
            </svg>
        </button>
    </nav>
    <div class="progress"></div>
</header>