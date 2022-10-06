<div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between mb-4">
        <a href="{{ route('home') }}"
            class="d-flex align-items-center col-md-3 mb-1 mb-md-0 text-dark text-decoration-none">
            <!-- <h3>JAKARTA WATCH TRADER</h3> -->
            <img src="img/logo_white.png" alt="logo" width="60%">
        </a>

        <ul class="nav col-12 col-md-auto mb-2 align-items-center justify-content-center mb-md-0">
            <li><a href="{{ route('home') }}"
                    class="nav-link {{ $title === 'Home' ? 'link-secondary' : 'link-light' }}">HOME</a></li>
            <li><a href="{{ route('watches') }}"
                    class="nav-link {{ $title === 'Watches' ? 'link-secondary' : 'link-light' }} ">WATCHES</a></li>
            <li><a href="{{ route('about') }}"
                    class="nav-link {{ $title === 'About Us' ? 'link-secondary' : 'link-light' }} ">ABOUT US</a></li>
        </ul>

        <div class="col-md-3 text-end">
            <a href="{{ route('dashboard') }}" class="d-block text-decoration-none text-white">
                <i class="bi bi-person-circle fs-2"></i>
            </a>
        </div>
    </header>
</div>
