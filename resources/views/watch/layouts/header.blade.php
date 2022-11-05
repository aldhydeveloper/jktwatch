<style>
    .back-drop {
        position: fixed;
        left: 0;
        top: 0;
        bottom: 0;
        right: 0;
        background-color: #00000080;
        z-index: 11;
    }

    .mobile-nav .burger {
        background-color: transparent;
        border: 0;
        margin: 18px 10px;
    }

    .mobile-nav .burger span {
        display: block;
        width: 22px;
        height: 2px;
        background-color: #fff;
        margin: 5px 0;
    }

    .mobile-nav .wrap {
        background-color: #000;
        position: fixed;
        left: -100%;
        top: 0;
        bottom: 0;
        z-index: 111;
        width: 70%;
        transition: 0.5s;
    }

    .mobile-nav.open .wrap {
        transform: translateX(140%)
    }

    .mobile-nav.open {}

    .bg-default {
        background-color: #191c24;
    }
</style>

<div class="fixed-top bg-default py-3">
    <div class="container ">
        <div id="back-drop" class=""></div>
        <header class="d-lg-flex d-none align-items-center justify-content-center justify-content-md-between ">
            <a href="{{ route('home') }}"><img src="{{ asset('img/logo_white.png') }}" width="150px"></a>

            <ul class="nav col-12 col-md-auto mb-2 align-items-center justify-content-center mb-md-0">
                <li><a href="{{ route('home') }}"
                        class="nav-link {{ $title === 'Home' ? 'link-secondary' : 'link-light' }}">HOME</a></li>
                <li><a href="/watch/all"
                        class="nav-link {{ $title === 'Watches' ? 'link-secondary' : 'link-light' }} ">WATCHES</a></li>
                <li><a href="{{ route('about') }}"
                        class="nav-link {{ $title === 'About Us' ? 'link-secondary' : 'link-light' }} ">ABOUT US</a>
                </li>
                <li><a href="{{ route('about') }}"
                        class="nav-link {{ $title === 'About Us' ? 'link-secondary' : 'link-light' }} ">SELL WITH US</a>
                </li>
            </ul>
        </header>
        <header id="mobile-nav" class="d-block d-lg-none mobile-nav d-flex">
            <a class="navbar-brand m-0" href="{{ route('home') }}"><img src="{{ asset('img/logo_white.png') }}"
                    width="120" alt="logo" /></a>
            <button id="burger" type="button" class="burger d-block ms-auto">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <div id="wrap" class="wrap p-5">
                <button id="close-ns" type="button" class="btn text-white d-block ms-auto">X</button>
                <ul class="nav flex-column text-center mt-5">
                    <li><a href="{{ route('home') }}"
                            class="nav-link {{ $title === 'Home' ? 'link-secondary' : 'link-light' }}">HOME</a></li>
                    <li><a href="/watch/all"
                            class="nav-link {{ $title === 'Watches' ? 'link-secondary' : 'link-light' }} ">WATCHES</a>
                    </li>
                    <li><a href="{{ route('about') }}"
                            class="nav-link {{ $title === 'About Us' ? 'link-secondary' : 'link-light' }} ">ABOUT
                            US</a>
                    </li>
                    <li><a href="{{ route('about') }}"
                            class="nav-link {{ $title === 'About Us' ? 'link-secondary' : 'link-light' }} ">SELL WITH
                            US</a>
                    </li>
                </ul>
            </div>
        </header>
        <div class="d-flex d-lg-none align-items-center justify-content-between mt-2 mx-2">

            <?php $num = 0; ?>
            @foreach ($collection as $key => $value)
                <?php $num++; ?>
            @endforeach
            <div class="text-center">{{ $num }} product</div>
            <button class=" btn-light navbar-toggler-right  align-self-center" type="button" data-toggle="offcanvas">
                <a class="btn btn-light">FILTER</a>
            </button>
        </div>
    </div>
</div>
<script>
    document.getElementById('burger').addEventListener('click', showSidebar);
    document.getElementById('close-ns').addEventListener('click', hideSidebar);

    function showSidebar() {
        document.getElementById('mobile-nav').classList.add('open')
        document.getElementById('back-drop').classList.add('back-drop')
    }

    function hideSidebar() {
        document.getElementById('mobile-nav').classList.remove('open')
        document.getElementById('back-drop').classList.remove('back-drop')
    }
</script>
