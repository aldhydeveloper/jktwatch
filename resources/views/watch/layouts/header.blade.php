<style>
    .sidebar-offcanvas {
        top: 100px;
    }
</style>
<nav class="navbar p-3 fixed-top d-block">
    <div class="d-flex d-lg-none mb-3">
        <a class="navbar-brand m-0" href="{{ route('home') }}"><img src="{{ asset('img/logo_white.png') }}" width="120"
                alt="logo" /></a>
    </div>
    <button class=" navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
        <a class="btn btn-light">FILTER</a>
    </button>
</nav>
