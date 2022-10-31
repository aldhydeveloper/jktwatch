<div class="container">
    <header class="align-items-center justify-content-center justify-content-md-between mb-4 py-3">


        <ul class="nav col-12 col-md-auto mb-2 align-items-center justify-content-center mb-md-0">
            <li><a href="{{ route('home') }}"
                    class="nav-link {{ $title === 'Home' ? 'link-secondary' : 'link-light' }}">HOME</a></li>
            <li><a href="/watch/all"
                    class="nav-link {{ $title === 'Watches' ? 'link-secondary' : 'link-light' }} ">WATCHES</a></li>
            <li><a href="{{ route('about') }}"
                    class="nav-link {{ $title === 'About Us' ? 'link-secondary' : 'link-light' }} ">ABOUT US</a></li>
        </ul>

    </header>
</div>
