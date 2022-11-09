@extends('home.layouts.main')

@section('container')
    <div class="container">

        <!-- START THE FEATURETTES -->

        <img class="cover-img-about-us" src="{{ asset('img/cover_about_us.jpg') }}" alt="cover">
        <div class="col-12 col-md-auto mb-2 align-items-center justify-content-center">
            <h3 class="text-center text-light">About Us</h3>
        </div>

        <hr class="my-4">

        <div class="text-center text-light">
            Jakarta Luxury watch adalah marketplace terdedikasi untuk menjual, membeli dan menukar jam tangan mewah.
            Ditemukan di tahun 2021, kami berambisi untuk menjadi platform dagang jam tangan terungul, menjanjikan pelayanan
            dan pengalaman terungul dalam dunia tangan mewah
        </div>

        <div class="text-center text-light mt-3">
            Kami memiliki tim ahli yang terinformasi dengan baik di industri ini, dari kurasi koleksi pribadi kami dan
            membantu mingincar jamtangan-jamtangan yang langka, hinga verifikasi Otentisitas barang dan perawatan jam tangan
            dengan komplikasi tinggi.
        </div>

        <hr class="my-4">

        <div class="col-12 col-md-auto mb-2 align-items-center justify-content-center">
            <h3 class="text-center text-light">Why Us?</h3>

        </div>


        @include('home.components.why-us')

        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->
@endsection
