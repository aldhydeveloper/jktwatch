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
</style>
<div class="container">
    <div id="back-drop" class=""></div>
    <header class="d-lg-flex d-none align-items-center justify-content-center justify-content-md-between mb-4 py-3">
        <ul class="nav col-12 col-md-auto mb-2 align-items-center justify-content-center mb-md-0">
            <li><a href="{{ route('home') }}"
                    class="nav-link {{ $title === 'Home' ? 'link-secondary' : 'link-light' }}">HOME</a></li>
            <li><a href="/watch/all"
                    class="nav-link {{ $title === 'Watches' ? 'link-secondary' : 'link-light' }} ">WATCHES</a></li>
            <li><a href="{{ route('about') }}"
                    class="nav-link {{ $title === 'About Us' ? 'link-secondary' : 'link-light' }} ">ABOUT US</a></li>
        </ul>
    </header>
    <header id="mobile-nav" class="d-block d-lg-none mobile-nav">
        <button id="burger" type="button" class="burger d-block ms-auto">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <div id="wrap" class="wrap">
            <button id="close" type="button" class="btn text-white d-block ms-auto">X</button>
            <ul class="nav flex-column">
                <li><a href="{{ route('home') }}"
                        class="nav-link {{ $title === 'Home' ? 'link-secondary' : 'link-light' }}">HOME</a></li>
                <li><a href="/watch/all"
                        class="nav-link {{ $title === 'Watches' ? 'link-secondary' : 'link-light' }} ">WATCHES</a></li>
                <li><a href="{{ route('about') }}"
                        class="nav-link {{ $title === 'About Us' ? 'link-secondary' : 'link-light' }} ">ABOUT US</a>
                </li>
            </ul>
        </div>
    </header>
</div>
<script>
    document.getElementById('burger').addEventListener('click', showSidebar);
    document.getElementById('close').addEventListener('click', hideSidebar);

    function showSidebar() {
        document.getElementById('mobile-nav').classList.add('open')
        document.getElementById('back-drop').classList.add('back-drop')
    }

    function hideSidebar() {
        document.getElementById('mobile-nav').classList.remove('open')
        document.getElementById('back-drop').classList.remove('back-drop')
    }
</script>
